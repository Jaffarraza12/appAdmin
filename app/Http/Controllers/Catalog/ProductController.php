<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Model\Catalog\CategoryProduct;
use App\Http\Model\Catalog\ProductImage;
use App\Http\Model\Catalog\Product;
use App\Http\Model\Catalog\Category;
use App\Http\Model\Catalog\ProductVariation;
use App\Http\Model\Catalog\ProductSpecial;
use App\Http\Model\Catalog\ProductVariationValue;
use App\Http\Model\Catalog\Variation;
use App\Http\Model\Catalog\VariationValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    var $HTTPS_CATALOG;
    var $DIR_IMAGE;

    public function __construct()
    {
        $this->HTTPS_CATALOG = 'http://localhost/carve/resources/catalog/';
        $this->DIR_IMAGE = 'C:\xampp\htdocs\carve\resources\catalog';
    }
    public function index(){
        $heading = 'Products ';
        $products =  Product::orderBy('product_id', 'desc')->paginate(15);
        $catalog_path = $this->HTTPS_CATALOG;
        return view('catalog.product.list',compact('products','heading','catalog_path'));
    }
    public function create(){
        $heading = 'Add New Product';
        $categories =  Category::orderBy('category_id', 'desc')->get();
        $actionUrl = URL('product');
        $product = new product;
        $https_catalog = $this->HTTPS_CATALOG;
        $variations = Variation::get();
        $img_thumb = asset('assets/images.png');
        $size_chart_thumb = asset('assets/images.png');
        return view('catalog.product.form',compact('product','heading','https_catalog','categories','actionUrl','variations','img_thumb','size_chart_thumb'));
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'seo_url' => 'required|max:100',
        ]);

        if (!$validator->fails()) {
            $product = new Product;
            $product->name = $request->name;
            $product->short_description = $request->short_description;
            $product->description = $request->description;
            $product->image = $request->image;
            $product->price = $request->price;
            $product->cost = $request->cost;
            $product->seo_url = $request->seo_url;
            $product->meta_title = $request->meta_title;
            $product->meta_description = $request->meta_description;
            $product->meta_keyword = $request->meta_keyword;
            $product->save();
            Response::json(array('success' => true, 'last_insert_id' => $product->product_id), 200);

            if(!is_null($request->product_images)) {
                $i=0;
                foreach ($request->product_images as $image) {
                    $productImage = new ProductImage;
                    $productImage->product_id = $product->product_id;
                    $productImage->image = $image;
                    $productImage->sort_order = $request->product_images_sort_order[$i];//worki
                    $productImage->save();
                    ++$i;
                }
            }
            if(!is_null($request->category) ) {
                foreach ($request->category as $category) {
                    $categoryProduct = new CategoryProduct;
                    $categoryProduct->product_id = $product->product_id;
                    $categoryProduct->category_id = $category;
                    $categoryProduct->save();
                }
            }
            //variation
            if(!is_null($request->variation)) {
                $a=0;
                foreach ($request->variation as $variation) {
                    $productVariation = new ProductVariation;
                    $productVariation->product_id = $product->product_id;
                    $productVariation->variation_id = $variation;
                    $productVariation->required = $request->variation_required[0];
                    $productVariation->save();
                    Response::json(array('success' => true, 'last_insert_id' => $productVariation->product_variation_id), 200);
                    //echo $product->product_id;
                    //print_r($request->variation_value[$variation]['value_id']);
                    //exit();
                    if($request->variation_value[$variation]['value_id'][0]){
                        $variationDB = Variation::where('variation_id',$variation)->first();
                        if($variationDB->type == 'select') {
                            $j = 0;
                            foreach($request->variation_value[$variation]['value_id'] as $value_id){
                                $productVariationValue = new ProductVariationValue;
                                $productVariationValue->product_variation_id = $productVariation->product_variation_id;
                                $productVariationValue->product_id = $product->product_id;
                                $productVariationValue->variation_id = $variation;
                                $productVariationValue->value_id = $value_id;
                                $productVariationValue->sku = $request->variation_value[$variation]['sku'][$j];
                                $productVariationValue->image = $request->variation_value[$variation]['image'][$j];
                                $productVariationValue->quantity = $request->variation_value[$variation]['quantity'][$j];
                                $productVariationValue->subtract = $request->variation_value[$variation]['subtract'][$j];
                                $productVariationValue->price = $request->variation_value[$variation]['price'][$j];
                                $productVariationValue->price_prefix = $request->variation_value[$variation]['price_prefix'][$j];
                                $productVariationValue->save();
                                ++$j;
                            }
                        }
                    }
                    ++$a;
                }
            }
            Session::flash('success', 'New Product Has Been Added to your list.');
            if($request->submit == 'continue'){
                return redirect('category/'.$product->product_id);
            } elseif($request->submit == 'listing') {
                return redirect('category');
            } elseif($request->submit == 'new') {
                return redirect('category/create');
            }
        } else{

            Session::flash('failed', 'Problem in adding Product.');
            return redirect('product/create')
                ->withErrors($validator, 'mess')
                ->withInput();
        }
    }
    public function show($id){
        $heading = 'Edit Product';
        $categories =  Category::orderBy('category_id', 'desc')->get();
        $actionUrl = URL('category/'.$id);
        $product = Product::where('product_id',$id)->first();
        if($product->image){
            $img_thumb = $this->HTTPS_CATALOG.'\\'.$product->image;
        } else {
            $img_thumb = asset('assets/images.png');
        }
        $variations = Variation::get();

        return view('catalog.product.form',compact('product','variations','heading','categories','actionUrl','id','method','img_thumb'));

    }
    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'heading' => 'required',
            'seo_url' => 'required|max:100',
        ]);
        if (!$validator->fails()) {
            $category = Category::find($request->category_id);
            $category->name = $request->name;
            $category->description = $request->description;
            $category->heading = $request->heading;
            $category->parent_id = $request->parent;
            $category->image = $request->image;
            $category->size_chart = $request->size_chart;
            $category->top = $request->top;
            $category->column = $request->column;
            $category->sort_order = $request->sort_order;
            $category->status = $request->status;
            $category->seo_url = $request->seo_url;
            $category->meta_description = $request->meta_description;
            $category->meta_title = $request->meta_title;
            $category->meta_keyword = $request->meta_keyword;
            $category->save();
            Session::flash('success', 'Category Has Been Saved.');
            if($request->submit == 'continue'){
                return redirect('category/'.$category->category_id);
            } elseif($request->submit == 'listing') {
                return redirect('category');
            } elseif($request->submit == 'new') {
                return redirect('category/create');
            }
        } else{
            Session::flash('failed', 'Problem in adding Category.');
            return redirect('category/'.$request->category_id   )
                ->withErrors($validator, 'mess')
                ->withInput();
        }
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        Session::flash('success', 'Category Has Been Remove.');
        $json['redirect'] =  URL('/category');
        echo json_encode($json);
    }
    public function VariationOption(Request $request){
        $json = array();
        $variation_id = $request->id;
        $img_thumb = asset('assets/images.png');

        $variation = Variation::where('variation_id',$variation_id)->first();
        $variationValues = VariationValue::where('variation_id',$variation_id)->get();
        $html = '<div class="form-group row table-responsive"><h3 class="col-12 text-center" for="input-status">'.$variation->name.' </h3>';
        $html .= '<div class="pull-right" style="width:10%;"><label>Required</label> <select class="form-control" name="variation_required[]"><option value="1">YES</option><option value="0">NO</option></select></div>';
        if($variation->type == 'select') {
            $html .= '<table class="table"><thead><th>Name</th><th>Image</th><th>SKU</th><th>Quantity</th><th>Subtract</th><th>Price Prefix</th><th>Price</th><th></th></thead>';
            $html .= '<tbody>';
            foreach ($variationValues as $value) {
                $html .= '<tr>';
                $html .= '<td>' . $value->name . ' <input type="hidden" name="variation_value[' . $variation->variation_id . '][value_id][]" value="' . $value->value_id . '" />  <input type="hidden" name="variation_value[' . $variation->variation_id . '][name][]" value="' .$variation->name . '" /> </td>';
                $html .= '<td><a ><img  data-multiple="0" data-input="value-'.$value->value_id.'"  id="thumb-value-image-'.$value->value_id.'" class="img-thumbnail"  width="100" height="auto" id="img-image"  src="' . $img_thumb . '" alt="" title="" data-placeholder="Image" /></a> <input id="value-'.$value->value_id.'" type="hidden" name="variation_value[' . $variation->variation_id . '][image][]" value="" id="input-image" /></td>';
                $html .= '<td><input class="form-control" type="text" name="variation_value[' . $variation->variation_id . '][sku][]" value="" /> </td>';
                $html .= '<td><input class="form-control" type="text" name="variation_value[' . $variation->variation_id . '][quantity][]" value="" /> </td>';
                $html .= '<td><select class="form-control" name="variation_value[' . $variation->variation_id . '][subtract][]" ><option value="1">YES</option><option value="0">NO</option></select></td>';
                $html .= '<td><select class="form-control" name="variation_value[' . $variation->variation_id . '][price_prefix][]" ><option value="+">+</option><option value="-">-</option></select></td>';
                $html .= '<td><input class="form-control" type="text" name="variation_value[' . $variation->variation_id . '][price][]" value="" /> </td>';
                $html .= '<td><a><i class="fa fa-trash"></i></a></td>';
                $html .= '</tr>';
            }
            $html .= '</tbody>';

        }
        $html .= '</table>';
        $json['html'] = $html;
        echo json_encode($json);






    }

}
