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
                <a href="{{ URL('category')}}" class="btn btn-default btn-bold">
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
                                     <input type="hidden" name="category_id" value="{{ $id }}" placeholder="{{ 'Name' }}" id="input-name" class="form-control" />
                                 @endif
                                 <div class="form-group required row">
                                     <label class="col-2 col-form-label" for="input-name">{{ 'Name' }}</label>
                                     <div class="col-10">
                                         <input type="text" name="name" value="{{ $category->name }}" placeholder="{{ 'Name' }}" id="input-name" class="form-control" />
                                         @if($errors->mess->first('name'))
                                         <div class="text-danger">{{ $errors->mess->first('name') }}</div>
                                         @endif
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label class="col-2 col-form-label" for="input-description">{{ 'Description' }}</label>
                                     <div class="col-10">
                                         <textarea name="description" placeholder="{{ 'Description' }}"  data-provide="markdown"  id="input-description" class="form-control">{{ $category->description }}</textarea>                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label class="col-2 col-form-label" for="input-heading">{{ 'Heading' }}</label>
                                     <div class="col-10">
                                         <input type="text" name="heading" value="{{ $category->heading }}" placeholder="{{ 'Heading' }}" id="input-meta-heading" class="form-control" />
                                         @if($errors->mess->first('heading'))
                                             <div class="text-danger">{{ $errors->mess->first('heading') }}</div>
                                         @endif
                                     </div>
                                 </div>



                            </div>

                    </div>
                </div>
                <div class="tab-pane" id="tab_data" role="tabpanel">
                    <div class="kt-portlet">
                             <div class="kt-portlet__body">
                                 <div class="form-group row">
                                     <label class="col-form-label col-2 ">Parent Category</label>
                                     <div class="col-10">
                                         <select name="parent" class="form-control kt-selectpicker" data-live-search="true">
                                            <option>Categories</option>
                                            @foreach($categories as $categ)
                                                 <option {{($category->category_id == $categ->category_id) ? 'selected="selected"' : ''}} value="{{$categ->category_id}}">{{$categ->name}}</option>
                                            @endforeach
                                         </select>
                                       </div>
                                 </div>
                                 <div class="form-group row">
                                     <label class="col-2 control-label">{{ 'Image' }}</label>
                                     <div class="col-10"><a ><img  data-input="input-image"  id="thumb-image" class="img-thumbnail"  width="100" height="auto" id="img-image"  src="{{ $img_thumb }}" alt="" title="" data-placeholder="{{ 'Image' }}" /></a>
                                         <input type="hidden" name="image" value="{{ $category->image }}" id="input-image" />
                                     </div>
                                   </div>
                                 <div class="form-group row">
                                     <label class="col-2 control-label">{{ 'Size Chart Image' }}</label>
                                     <div class="col-10"><a><img width="100"  data-input="input-size-chart" id="size-chart-image" class="img-thumbnail" data-input="input-image"  id="thumb-image"  src="{{ $size_chart_thumb }}" alt="" title="" data-placeholder="{{ 'Size Chart Image' }}" /></a>
                                         <input type="hidden" name="size_chart" value="{{ $category->size_chart}}" id="input-size-chart" />
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label class="col-2 control-label" for="input-top">{{'Top Navigation'}}</label>
                                     <div class="col-10">
                                         <div class="checkbox">
                                             <label>
                                                 @if(!$category->top)
                                                 <input type="checkbox" name="top" value="1" id="input-top" />
                                                 @else
                                                 <input type="checkbox" name="top" value="1" id="input-top"  checked="checked" />
                                                 @endif
                                                  </label>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label class="col-2 control-label" for="input-column">{{'Side Navigation'}}</label>
                                     <div class="col-10">
                                         <label>
                                             @if(!$category->column)
                                                 <input type="checkbox" name="column" value="1" id="input-top" />
                                             @else
                                                 <input type="checkbox" name="column" value="1" id="input-top" checked="checked" />
                                             @endif
                                         </label>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label class="col-2 col-form-label " for="input-sort-order">{{ 'Sort Order' }}</label>
                                     <div class="col-10">
                                         <input type="text" name="sort_order" value="{{ $category->sort_order }}" placeholder="{{ 'Sort Order' }}" id="input-sort-order" class="form-control" />
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label class="col-2 col-form-label " for="input-status">{{ 'Status' }}</label>
                                     <div class="col-10">
                                         <select name="status" id="input-status" class="form-control">
                                             @if($category->status)
                                             <option value="1" selected="selected">{{ 'Enabled' }}</option>
                                             <option value="0">{{ 'Disabled' }}</option>
                                             @else
                                             <option value="1">{{ 'Enabled' }}</option>
                                             <option value="0" selected="selected">{{ 'Disabled' }}</option>
                                             @endif
                                         </select>
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
                                         <input type="text" name="seo_url" value="{{ $category->seo_url }}" placeholder="{{'Seo Url'}}" id="input-column" class="form-control" />
                                         @if($errors->mess->first('seo_url'))
                                             <div class="text-danger">{{ $errors->mess->first('seo_url') }}</div>
                                         @endif
                                     </div>

                                 </div>
                                 <div class="form-group required row">
                                     <label class="col-2 col-form-label" for="input-meta-title">{{ 'Meta Title' }}</label>
                                     <div class="col-10">
                                         <input type="text" name="meta_title" value="{{ $category->meta_title }}" placeholder="{{ 'Meta Title' }}" id="input-meta-title" class="form-control" />
                                         <div class="text-danger">{{ '' }}</div>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label class="col-2 col-form-label" for="input-meta-description">{{ 'Meta Description' }}</label>
                                     <div class="col-10">
                                         <textarea name="meta_description" rows="5" placeholder="{{ 'Meta Description' }}" id="input-meta-description" class="form-control">{{ $category->meta_description }}</textarea>
                                     </div>
                                 </div>
                                 <div class="form-group row">
                                     <label class="col-2 col-form-label" for="input-meta-keyword">{{ 'Meta Keyword' }}</label>
                                     <div class="col-10">
                                         <textarea name="meta_keyword" rows="5" placeholder="{{ 'Meta Keyword' }}" id="input-meta-keyword" class="form-control">{{ $category->meta_keyword }}</textarea>
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
    <script>
        $('.img-thumbnail').click(function () {
            var elem = $(this).data('input')
            var show = $(this).attr('id')
            $('.filemanager').attr('src','{{URL("file-manager")}}'+'?elem='+elem+'&show='+show)
            $('#jr_modal').modal('show')
        });
    </script>
@endsection