<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Model\Catalog\Product;
use App\Http\Model\Catalog\ProductSpecial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Catalog\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
class CategoryController extends Controller
{
    var $HTTPS_CATALOG;
    var $DIR_IMAGE;

    public function __construct()
    {
        if($_SERVER['SERVER_NAME'] == 'localhost') {
            $this->HTTPS_CATALOG = 'http://localhost/carve/resources/catalog';
            $this->DIR_IMAGE = 'C:\xampp\htdocs\carve\resources\catalog';
        } else {
            $this->HTTPS_CATALOG = 'http://carve.pk/demo/resources/catalog';
            $this->DIR_IMAGE = '/home/carve/public_html/demo/resources/catalog';
        }
    }
    public function index(){
        $heading = 'Categories ';
        $categories =  Category::orderBy('category_id', 'desc')->paginate(15);;
        return view('catalog.category.list',compact('categories','heading'));
    }
    public function create(){
        $heading = 'Add New Category';
        $categories =  Category::orderBy('category_id', 'desc')->get();
        $actionUrl = URL('category');
        $category = new Category;
        $img_thumb = asset('assets/images.png');
        $size_chart_thumb = asset('assets/images.png');
        return view('catalog.category.form',compact('category','heading','categories','actionUrl','img_thumb','size_chart_thumb'));
    }
    public function store(Request $request){


        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:category|max:255',
            'heading' => 'required',
            'seo_url' => 'required|max:100',
        ]);
        if (!$validator->fails()) {
            $category = new Category;
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
            Response::json(array('success' => true, 'last_insert_id' => $category->category_id), 200);
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
            return redirect('category/create')
                ->withErrors($validator, 'mess')
                ->withInput();
        }
    }
    public function show($id){
        $heading = 'Edit Category';
        $categories =  Category::orderBy('category_id', 'desc')->get();
        $actionUrl = URL('category/'.$id);
        $category = Category::where('category_id',$id)->first();
        if($category->image){
            $img_thumb = $this->HTTPS_CATALOG.'\\'.$category->image;
        } else {
            $img_thumb = asset('assets/images.png');
        }
        if($category->size_chart){
            $size_chart_thumb = $this->HTTPS_CATALOG.'\\'.$category->size_chart;
        } else {
            $size_chart_thumb = asset('assets/images.png');
        }
        return view('catalog.category.form',compact('category','heading','categories','actionUrl','id','img_thumb','size_chart_thumb'));

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

}
