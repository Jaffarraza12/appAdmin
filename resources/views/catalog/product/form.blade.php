@extends('layout.master')
@section('css')
    <style>
        .nav-tabs.nav-tabs-line.nav.nav-tabs .nav-link, .nav-tabs.nav-tabs-line a.nav-link {
            font-size:20px;
            padding:10px 20px;
        }
        .nav-tabs.nav-tabs-line.nav-tabs-line-success.nav.nav-tabs .nav-link:hover, .nav-tabs.nav-tabs-line.nav-tabs-line-success.nav.nav-tabs .nav-link.active, .nav-tabs.nav-tabs-line.nav-tabs-line-success a.nav-link:hover, .nav-tabs.nav-tabs-line.nav-tabs-line-success a.nav-link.active{
            color: #5d78ff;
            border-bottom: 1px solid #5d78ff;
            font-size:20px;
            padding:10px 20px;
        }
        .nav-tabs.nav-tabs-line.nav-tabs-line-success.nav.nav-tabs .nav-link:hover > i, .nav-tabs.nav-tabs-line.nav-tabs-line-success.nav.nav-tabs .nav-link.active > i, .nav-tabs.nav-tabs-line.nav-tabs-line-success a.nav-link:hover > i, .nav-tabs.nav-tabs-line.nav-tabs-line-success a.nav-link.active > i{
            color: #5d78ff;
        }
        .alert-text{font-weight:bold;font-size:14px;}
        .modal-dialog {
            max-width: 1200px;

        }
        .variation-html{
            background: #e4e0e8;
            padding:10px 10px;
        }
        .variation-option{
            background: #ece8f0;
            padding:10px 10px;
        }
    </style>
@endsection
@section('header')
    <form action="{{$actionUrl}}" method="POST" class="kt-form kt-form--label-right">
        {!! csrf_field() !!}
        <div class="kt-subheader   kt-grid__item" id="kt_subheader">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    {{$heading}} </h3>
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="" class="kt-subheader__breadcrumbs-link">
                        Order </a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                    <a href="" class="kt-subheader__breadcrumbs-link">
                        New Order </a>

                    <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <div class="kt-subheader__toolbar">
                    <a href="{{ URL('product')}}" class="btn btn-default btn-bold">
                        Back </a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-brand btn-bold">
                            Submit </button>
                        <button type="button" class="btn btn-brand btn-bold dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__item">
                                    <button type="submit" name="submit" value="continue"  class="btn btn-secondary btn-taller">
                                        <i class="kt-nav__link-icon flaticon2-writing"></i>
                                        <span class="kt-nav__link-text">Save &amp; continue</span>
                                    </button>

                                </li>
                                <li class="kt-nav__item">
                                    <button type="submit" name="submit" value="new" class="btn btn-secondary btn-taller">
                                        <i class="kt-nav__link-icon flaticon2-medical-records"></i>
                                        <span class="kt-nav__link-text">Save &amp; add new</span>
                                    </button>
                                </li>
                                <li class="kt-nav__item">
                                    <button type="submit" name="submit"  value="listing    " class="btn btn-secondary btn-taller">
                                        <i class="kt-nav__link-icon flaticon2-hourglass-1"></i>
                                        <span class="kt-nav__link-text">Save &amp; exit</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        @endsection
        @section('content')
            <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        <div class="alert-text">{{ Session::get('success') }}</div>
                    </div>
                @endif
                @if(Session::has('failed'))
                    <div class="alert alert-danger" role="alert">
                        <div class="alert-text">{{ Session::get('failed') }}</div>
                    </div>
                @endif
                <div class="row">
                    <div class="kt-portlet kt-portlet--tabs">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-toolbar">
                                <ul class="nav nav-tabs nav-tabs-line nav-tabs-line-success" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" href="#tab_general" data-toggle="tab">{{ 'General' }}</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_data" data-toggle="tab">{{ 'Data' }}</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_image" data-toggle="tab">{{ 'Images' }}</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_variation" data-toggle="tab">{{ 'Variations' }}</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_special" data-toggle="tab">{{ 'Specials' }}</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#tab_seo" data-toggle="tab">{{ 'SEO' }}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="kt-portlet__body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_general" role="tabpanel">
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__body">
                                            @if(isset($id))
                                                @method('PATCH')
                                                <input type="hidden" name="product_id" value="{{ $id }}" placeholder="{{ 'Name' }}" id="input-name" class="form-control" />
                                            @endif
                                            <div class="form-group required row">
                                                <label class="col-2 col-form-label" for="input-name">{{ 'Name' }}</label>
                                                <div class="col-10">
                                                    <input type="text" name="name" value="{{ (old('name') ) ? old('name') : $product->name }}" placeholder="{{ 'Name' }}" id="input-name" class="form-control" />
                                                    @if($errors->mess->first('name'))
                                                        <div class="text-danger">{{ $errors->mess->first('name') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label" for="input-description">{{ 'Short Description' }}</label>
                                                <div class="col-10">
                                                    <textarea name="short_description" placeholder="{{ 'Short Description' }}"  id="input-short-description" class="form-control">{{ (old('short_description') ) ? old('short_description') :  $product->short_description }}</textarea>                                     </div>
                                            </div>

 <div class="form-group row">
                                                <label class="col-2 col-form-label" for="input-description">{{ 'Description' }}</label>
                                                <div class="col-10">
                                                    <textarea name="description" placeholder="{{ 'Description' }}"  data-provide="markdown"  id="input-description" class="form-control">{{ (old('description') ) ? old('description') : $product->description }}</textarea>                                     </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_data" role="tabpanel">
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__body">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label ">Categories</label>
                                                <div class="col-10">
                                                    @if(old('category.0'))
                                                    <select name="category[]" class="form-control form-control--fixed kt-selectpicker" multiple data-max-options="5" >
                                                        @foreach($categories as $category)
                                                            @php $Cselect = (in_array($category->category_id,old('category'))) ?  'selected="selected"' : '' ;  @endphp
                                                            <option {{$Cselect}} value="{{$category->category_id}}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    @elseif($productCategories)
                                                        <select name="category[]" class="form-control form-control--fixed kt-selectpicker" multiple data-max-options="5" >
                                                            @foreach($categories as $category)
                                                                @php $Cselect = (in_array($category->category_id,$productCategories)) ?  'selected="selected"' : '' ;  @endphp
                                                                <option {{$Cselect}} value="{{$category->category_id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    @else
                                                        <select name="category[]" class="form-control form-control--fixed kt-selectpicker" multiple data-max-options="5" >
                                                            @foreach($categories as $category)
                                                                <option value="{{$category->category_id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>

                                                    @endif

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 control-label">{{ 'Image' }}</label>
                                                <div class="col-10"><a ><img  data-multiple="0" data-input="input-image"  id="thumb-image" class="img-thumbnail"  width="100" height="auto" id="img-image"  src="{{ (old('image') ) ? $https_catalog.old('image') :  $img_thumb }}  " alt="" title="" data-placeholder="{{ 'Image' }}" /></a>
                                                    <input type="hidden" name="image" value="{{ (old('image')) ? old('image') :  '' }}" id="input-image" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label " for="input-price">{{ 'Price' }}</label>
                                                <div class="col-3">
                                                    <input type="number" class="form-control"  name="price" value="{{ (old('price') ) ? old('price') :  $product->price}}" id="input-image" />

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label"  for="input-cost">{{ 'Cost' }}</label>
                                                <div class="col-3">
                                                    <input type="number" class="form-control" name="cost"  value="{{(old('cost') ) ? old('cost') :  $product->cost}}" id="input-image" />

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-2 col-form-label " for="input-status">{{ 'Status' }}</label>
                                                <div class="col-10">
                                                    @php
                                                        if(!is_null(old('status') ))
                                                         {
                                                            $selectStatus =  old('status');
                                                        } else {
                                                            $selectStatus =  $product->status;
                                                        }
                                                    @endphp
                                                    <select name="status" id="input-status" class="form-control">
                                                            <option value="1" {{($selectStatus ==1 ) ? 'selected="selected"' : ''}} >{{ 'Enabled' }}</option>
                                                            <option value="0" {{($selectStatus ==0 ) ? 'selected="selected"' : ''}}>{{ 'Disabled' }}</option>
                                                    </select>
                                                </div>
                                            </div>



                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_image" role="tabpanel">
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__body">
                                            <div class="form-group row table-responsive">
                                                <table class="table" width="100%" cellpadding="0" cellspacing="0">
                                                    <thead>
                                                     <th style="width:25%;">Image</th>
                                                     <th style="width:75%;">Sort Order</th>
                                                    </thead>
                                                    <tbody id="product-image-row">
                                                     @if ( !is_null(old('product_images.0')) )
                                                         @for($i=0;$i < count(old('product_images'));++$i)
                                                             <tr>
                                                           <td><a ><img data-multiple="1"  data-input="input-product-image-{{$i}}"  id="thumb-product-image-1" class="img-thumbnail"  width="100" height="auto" id="img-image"  src="{{ $https_catalog.old('product_images.'.$i) }}" alt="" title="" data-placeholder="{{ 'Image' }}" /></a>
                                                                <input id="input-product-image-{{$i}}" type="hidden" name="product_images[]" value="{{ old('product_images.'.$i) }}"  /></td>
                                                            <td><br/><input type="number" class="form-control"  name="product_images_sort_order[]" value="{{  old('product_images_sort_order.'.$i) }}"  /></td>
                                                             </tr>
                                                           @endfor
                                                     @elseif($productImages && count($productImages) > 0)
                                                         @foreach($productImages as $image)
                                                             <tr>
                                                                 <td><a ><img data-multiple="1"  data-input="input-product-image-{{$image->product_image_id}}"  id="thumb-product-image-{{$image->product_image_id}}" class="img-thumbnail"  width="100" height="auto" id="img-image"  src="{{ $https_catalog.$image->image }}" alt="" title="" data-placeholder="{{ 'Image' }}" /></a>
                                                                     <input id="input-product-image-{{$i}}" type="hidden" name="product_images[]" value="{{ $image->image }}"  /></td>
                                                                 <td><br/><input type="number" class="form-control"  name="product_images_sort_order[]" value="{{  $image->sort_order }}"  /></td>
                                                             </tr>
                                                         @endforeach
                                                      @else
                                                         <tr>
                                                         <td><a ><img data-multiple="1"  data-input="input-product-image-1"  id="thumb-product-image-1" class="img-thumbnail"  width="100" height="auto" id="img-image"  src="{{ $img_thumb }}" alt="" title="" data-placeholder="{{ 'Image' }}" /></a>
                                                             <input id="input-product-image-1" type="hidden" name="product_images[]" value="{{ '' }}"  /></td>
                                                         <td><br/><input type="number" class="form-control"  name="product_images_sort_order[]" value="{{ ''  }}"  /></td>
                                                         </tr>
                                                      @endif
                                                    </tbody>
                                                </table>



                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_variation" role="tabpanel">
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__body ">
                                          <div class="variation-box">
                                               <div id="variation-html-1'" class="variation-html">
                                                    <div class="form-group row">
                                                         @if(!is_null(old('variation.0')))
                                                            @for($i=0;$i<= count(old('variation')) - 1 ; ++$i)
                                                            <label class="col-2 col-form-label"> {{ 'Variations' }}</label>
                                                            <div class="col-8">
                                                                <select data-elem="variation-option-{{$i}}" name="variation[]" id="input-status" class="form-control">
                                                                    <option>SELECT VARIATION</option>
                                                                    @foreach($variations as $variation)
                                                                        @php
                                                                            $selectV = (old('variation.'.$i) == $variation->variation_id ) ? 'selected="selected"' : '' ;
                                                                            if(old('variation.'.$i) == $variation->variation_id){
                                                                              $variation_name = $variation->name ;
                                                                            }
                                                                        @endphp
                                                                        <option {{$selectV}} value="{{$variation->variation_id}}">{{$variation->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="col-2"><a><i data-elem="variation-html-{{$i}}" class="fa fa-trash"></i></a></div>
                                                            <div class="variation-option" id="variation-option-{{$i}}">

                                                                @if(!is_null(old('variation_value.'.old('variation.'.$i).'.value_id.0') ) )
                                                                    <div class="form-group row table-responsive">
                                                                        <h3 class="col-12 text-center" >{{$variation_name}}</h3>
                                                                        <div class="pull-right" style="width:10%;"><label>Required</label> <select class="form-control" name="variation_required[]"><option value="1">YES</option><option value="0">NO</option></select></div>
                                                                        <table class="table"><thead>
                                                                            <th>Name</th><th>Image</th><th>SKU</th><th>Quantity</th><th>Subtract</th><th>Price Prefix</th><th>Price</th><th></th></thead>
                                                                            <tbody>
                                                                            @for($j=0 ; $j < count(old('variation_value.'.old('variation.'.$i).'.value_id')) ; $j++ )
                                                                                <tr>
                                                                                    <td>{{ old('variation_value.'.old('variation.'.$i).'.name.'.$j) }} <input type="hidden" name="variation_value[{{old('variation.'.$i)}}][value_id][]" value="{{ old('variation_value.'.old('variation.'.$i).'.value_id.'.$j) }}" /><input type="hidden" name="variation_value[{{old('variation.'.$i)}}][name][]" value="{{ old('variation_value.'.old('variation.'.$i).'.name.'.$j) }}" /></td>
                                                                                    @if(is_null(old('variation_value.'.old('variation.'.$i).'.image.'.$j)))
                                                                                        <td><a ><img  data-multiple="0" data-input="value-{{ old('variation_value.'.old('variation.'.$i).'.value_id.'.$j) }}"  id="thumb-value-image-{{ old('variation_value.'.old('variation.'.$i).'.value_id.'.$j) }}" class="img-thumbnail"  width="100" height="auto" id="img-image"  src="{{ $img_thumb }}" alt="" title="" data-placeholder="Image" /></a> <input id="value-{{ old('variation_value.'.old('variation.'.$i).'.value_id.'.$j) }}" type="hidden" name="variation_value[{{old('variation.'.$i)}}][image][]" value="" id="input-image" /></td>
                                                                                    @else
                                                                                        <td><a ><img  data-multiple="0" data-input="value-{{ old('variation_value.'.old('variation.'.$i).'.value_id.'.$j) }}"  id="thumb-value-image-{{ old('variation_value.'.old('variation.'.$i).'.value_id.'.$j) }}" class="img-thumbnail"  width="100" height="auto" id="img-image"  src="{{ $https_catalog.old('variation_value.'.old('variation.'.$i).'.image.'.$j) }}" alt="" title="" data-placeholder="Image" /></a> <input id="value-{{ old('variation_value.'.old('variation.'.$i).'.value_id.'.$j) }}" type="hidden" name="variation_value[{{old('variation.'.$i)}}][image][]" value="{{ old('variation_value.'.old('variation.'.$i).'.image.'.$j) }}" id="input-image" /></td>
                                                                                    @endif
                                                                                    <td><input class="form-control" type="text" name="variation_value[{{old('variation.'.$i)}}][sku][]" value="{{ old('variation_value.'.old('variation.'.$i).'.sku.'.$j) }}" /> </td>
                                                                                    <td><input class="form-control" type="text" name="variation_value[{{old('variation.'.$i)}}][quantity][]" value="{{ old('variation_value.'.old('variation.'.$i).'.quantity.'.$j) }}" /> </td>
                                                                                    <td><select class="form-control" name="variation_value[{{old('variation.'.$i)}}][subtract][]" ><option {{ ( old('variation_value.'.old('variation.'.$i).'.subtract.'.$j) == 1) ? 'selected="selected"' : ''}}  value="1">YES</option><option {{ ( old('variation_value.'.old('variation.'.$i).'.subtract.'.$j) == 0) ? 'selected="selected"' : ''}} value="0">NO</option></select></td>
                                                                                    <td><select class="form-control" name="variation_value[{{old('variation.'.$i)}}][price_prefix][]" ><option  {{ ( old('variation_value.'.old('variation.'.$i).'.price_prefix.'.$j) == '+') ? 'selected="selected"' : ''}} value="+">+</option><option {{ ( old('variation_value.'.old('variation.'.$i).'.price_prefix.'.$j) == '-') ? 'selected="selected"' : ''}} value="-">-</option></select></td>
                                                                                    <td><input class="form-control" type="text" name="variation_value[{{old('variation.'.$i)}}][price][]" value="{{ old('variation_value.'.old('variation.'.$i).'.price.'.$j) }}" /> </td>
                                                                                    <td><a><i class="fa fa-trash"></i></a></td>
                                                                                    </tr>
                                                                            @endfor
                                                                            </tbody>

                                                                        </table>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            @endfor
                                                        @elseif($productVariations && count($productVariations) > 0)
                                                             @foreach($productVariations as $variat)
                                                             <label class="col-2 col-form-label"> {{ 'Variations' }}</label>
                                                             <div class="col-8">
                                                                 <select data-elem="variation-option-{{$variat->variation_id}}" name="variation[]" id="input-status" class="form-control">
                                                                     <option>SELECT VARIATION</option>
                                                                     @foreach($variations as $variation)
                                                                         @php
                                                                             $selectV = ($variat->variation_id == $variation->variation_id) ? 'selected="selected"' : '' ;
                                                                             if($variat->variation_id == $variation->variation_id){
                                                                               $variation_name = $variation->name ;
                                                                             }
                                                                         @endphp
                                                                         <option {{$selectV}} value="{{$variation->variation_id}}">{{$variation->name}}</option>
                                                                     @endforeach
                                                                 </select>
                                                             </div>
                                                             <div class="col-2"><a><i data-elem="variation-html-{{$variat->variation_id}}" class="fa fa-trash"></i></a></div>
                                                             <div class="variation-option" id="variation-option-{{$variat->variation_id}}">

                                                                 @if($productVariationValues && sizeof($productVariationValues) > 0)
                                                                     <div class="form-group row table-responsive">
                                                                         <h3 class="col-12 text-center" >{{$variation_name}}</h3>
                                                                         <div class="pull-right" style="width:10%;"><label>Required</label> <select class="form-control" name="variation_required[]"><option value="1">YES</option><option value="0">NO</option></select></div>
                                                                         <table class="table"><thead>
                                                                             <th>Name</th><th>Image</th><th>SKU</th><th>Quantity</th><th>Subtract</th><th>Price Prefix</th><th>Price</th><th></th></thead>
                                                                             <tbody>
                                                                             @foreach($productVariationValues[$variat->variation_id] as $variant_values)
                                                                                 <tr>
                                                                                     <td>{{ $variant_values->name}} <input type="hidden" name="variation_value[{{$variat->variation_id}}][value_id][]" value="{{ $variant_values->value_id }}" /><input type="hidden" name="variation_value[{{$variat->variation_id}}][name][]" value="{{ $variant_values->name }}" /></td>
                                                                                     @if(empty($variant_values->image))
                                                                                         <td><a ><img  data-multiple="0" data-input="value-{{ $variant_values->value_id }}"  id="thumb-value-image-{{ $variant_values->value_id }}" class="img-thumbnail"  width="100" height="auto" id="img-image"  src="{{ $blank_thumb }}" alt="" title="" data-placeholder="Image" /></a> <input id="value-{{ $variant_values->value_id }}" type="hidden" name="variation_value[{{$variant_values->value_id}}][image][]" value="" id="input-image" /></td>
                                                                                     @else
                                                                                         <td><a ><img  data-multiple="0" data-input="value-{{ $variant_values->value_id }}"  id="thumb-value-image-{{ $variant_values->value_id }}" class="img-thumbnail"  width="100" height="auto" id="img-image"  src="{{ $https_catalog.$variant_values->image }}" alt="" title="" data-placeholder="Image" /></a> <input id="value-{{ $variant_values->value_id }}" type="hidden" name="variation_value[{{$variant_values->value_id}}][image][]" value="{{$variant_values->value_id}}" id="input-image" /></td>
                                                                                     @endif
                                                                                     <td><input class="form-control" type="text" name="variation_value[{{$variat->variation_id}}][sku][]" value="{{ $variant_values->sku }}" /> </td>
                                                                                     <td><input class="form-control" type="text" name="variation_value[{{$variat->variation_id}}][quantity][]" value="{{ $variant_values->quantity }}" /> </td>
                                                                                     <td><select class="form-control" name="variation_value[{{$variat->variation_id}}][subtract][]" ><option {{ ( $variant_values->subtract == 1) ? 'selected="selected"' : ''}}  value="1">YES</option><option {{ ( $variant_values->subtract == 0) ? 'selected="selected"' : ''}} value="0">NO</option></select></td>
                                                                                     <td><select class="form-control" name="variation_value[{{$variat->variation_id}}][price_prefix][]" ><option  {{ ( $variant_values->price_prefix == '+') ? 'selected="selected"' : ''}} value="+">+</option><option {{ ( $variant_values->price_prefix == '-') ? 'selected="selected"' : ''}} value="-">-</option></select></td>
                                                                                     <td><input class="form-control" type="text" name="variation_value[{{$variat->variation_id}}][price][]" value="{{  $variant_values->price }}" /> </td>
                                                                                     <td><a><i class="fa fa-trash   "></i></a></td>
                                                                                 </tr>
                                                                             @endforeach
                                                                             </tbody>

                                                                         </table>
                                                                     </div>
                                                                 @endif
                                                             </div>
                                                             @endforeach;
                                                        @else
                                                        <label class="col-2 col-form-label" for="input-status">{{ 'Variations' }}</label>
                                                        <div class="col-8">
                                                            <select data-elem="variation-option-1" name="variation[]" id="input-status" class="form-control">
                                                                <option>SELECT VARIATION</option>
                                                                @foreach($variations as $variation)
                                                                  <option value="{{$variation->variation_id}}">{{$variation->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="col-2"><a><i data-elem="variation-html-1" class="fa fa-trash"></i></a></div>
                                                        <div class="variation-option" id="variation-option-1"></div>
                                                        @endif
                                                    </div>

                                               </div>
                                          </div>
                                          <div class="row">
                                                <div class="col-12">
                                                    <div class="pull-right">
                                                        <a  class="add_variation"><i class="fa fa-plus"></i> Add More</a>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_special" role="tabpanel">
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__body">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label " for="input_special_price">{{ ' Special Price' }}</label>
                                                <div class="col-3">
                                                    <input type="number" class="form-control"  name="special_price" value="{{ (old('special_price') ? old('special_price') : $product->special_price )}}" id="input-special-price" />
                                                </div>
                                            </div>
                                         </div>

                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_seo" role="tabpanel">
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__body">
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label " for="input-column">{{'Seo Url'}}</label>
                                                <div class="col-10">
                                                    <input type="text" name="seo_url" value="{{ (old('seo_url') ? old('seo_url') : $product->seo_url )}}" placeholder="{{'Seo Url'}}" id="input-column" class="form-control" />
                                                    @if($errors->mess->first('seo_url'))
                                                        <div class="text-danger">{{ $errors->mess->first('seo_url') }}</div>
                                                    @endif
                                                </div>

                                            </div>
                                            <div class="form-group required row">
                                                <label class="col-2 col-form-label" for="input-meta-title">{{ 'Meta Title' }}</label>
                                                <div class="col-10">
                                                    <input type="text" name="meta_title" value="{{ (old('meta_title') ? old('meta_title') : $product->meta_title )}}" placeholder="{{ 'Meta Title' }}" id="input-meta-title" class="form-control" />
                                                    <div class="text-danger">{{ '' }}</div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label" for="input-meta-description">{{ 'Meta Description' }}</label>
                                                <div class="col-10">
                                                    <textarea name="meta_description" rows="5" placeholder="{{ 'Meta Description' }}" id="input-meta-description" class="form-control">{{ (old('meta_description') ? old('meta_description') : $product->meta_description )}}</textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-2 col-form-label" for="input-meta-keyword">{{ 'Meta Keyword' }}</label>
                                                <div class="col-10">
                                                    <textarea name="meta_keyword" rows="5" placeholder="{{ 'Meta Keyword' }}" id="input-meta-keyword" class="form-control">{{ (old('meta_keyword') ? old('meta_keyword') : $product->meta_keyword )}}</textarea>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </form>
    <div class="modal fade" id="jr_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <iframe src="" class="filemanager" width="100%" height="600" frameborder="0" allowtransparency="true"></iframe>
            </div>
        </div>
    </div>
@endsection

@section('js')
     <script src="{{asset('assets/js/demo1/scripts.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/demo1/pages/crud/forms/widgets/bootstrap-select.js')}}" type="text/javascript"></script>

    <script>
        $(document).ready(function(){

            $(document).on('click','.add_variation',function () {
                var ind = $('select[name="variation[]"]').length + 1
                var variation_html = ''
                variation_html += '<div id="variation-html-'+ind+'" class="variation-html"><div class="form-group row"><label class="col-2 col-form-label" for="input-status">{{ 'Variations' }}</label>'
                variation_html += '<div class="col-8"><select data-elem="variation-option-'+ind+'" name="variation[]" id="input-status" class="form-control"><option>SELECT VARIATION</option>'
                @foreach($variations as $variation)
                    variation_html += '<option value="{{$variation->variation_id}}">{{$variation->name}}</option>'
                 @endforeach
                variation_html += '</select></div><div class="col-2"><a><i class="fa fa-trash"></i></a></div></div><div class= class="variation-option" id="variation-option-'+ind+'"></div></div>'
                $('.variation-box').append(variation_html)
            });
            $(document).on('change','select[name="variation[]"]',function () {
                var elem = $(this).data('elem')
                var value = $(this).val()
                $.ajax({
                    url: '{{URL('product-variation')}}',
                    type: 'post',
                    dataType: 'json',
                    data: {'id': value,'_token': $('input[name="_token"]').val()},
                    success: function (json) {
                        if(json.html){
                            $('#'+elem).html(json.html)
                        }
                    }
                });

            });

        });


        $(document).on('click','.img-thumbnail',function () {
            var elem = $(this).data('input')
            var multiple = $(this).data('multiple')
            var show = $(this).attr('id')
            $('.filemanager').attr('src','{{URL("file-manager")}}'+'?elem='+elem+'&show='+show+'&multiple='+multiple)
            $('#jr_modal').modal('show')
        });
    </script>
@endsection