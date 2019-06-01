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
    </style>
@endsection
@section('header')
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

                <div class="btn-group">
                    <a href="{{URL('category/create')}}">
                    <button type="button" class="btn btn-danger btn-bold">
                        NEW </button></a>
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
            <div class="col-xl-12">

                <!--begin:: Widgets/Sale Reports-->
                <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                    <div class="kt-portlet__body">

                        <!--Begin::Tab Content-->
                        <div class="tab-content">

                            <div class="tab-pane active" id="kt_widget11_tab2_content">
                                  <div class="kt-widget11">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <td style="width:1%">#</td>
                                                <td style="width:10%">ID</td>
                                                <td style="width:60%">Name</td>
                                                 <td style="width:15%">Status</td>
                                                <td style="width:2%" class="kt-align-right">Action</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td>
                                                        <label class="kt-checkbox kt-checkbox--single">
                                                            <input type="checkbox"><span></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <span class="kt-widget11__title">{{$category->category_id}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="kt-widget11__title">{{$category->name}}</span>
                                                    </td>
                                                    @php
                                                    if($category->status == 1){
                                                        $cls = 'btn btn-success btn-elevate';
                                                        $txt = 'ENABLED';
                                                    } else {
                                                        $cls = 'btn btn-danger btn-elevate';
                                                        $txt = 'DISABLED';
                                                    }

                                                @endphp

                                                    <td><span class="{{$cls}}">{{$txt}}</span></td>
                                                    <td><a href="{{URL('category/'.$category->category_id)}}"><i class="flaticon2-edit"></i></a>   <a data-url="{{URL("category/".$category->category_id)}}" data-id="{{$category->category_id}}" class="remove"><i class="flaticon-delete"></i></a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $categories->links() }}
                                    </div>

                                </div><input type="hidden" name="_method" value="delete" />
                             {!! csrf_field() !!}

                                <!--end::Widget 11-->
                            </div>

                            <!--end::tab 2 content-->

                            <!--begin::tab 3 content-->
                            <div class="tab-pane" id="kt_widget11_tab3_content">
                            </div>

                            <!--end::tab 3 content-->
                        </div>

                        <!--End::Tab Content-->
                    </div>
                </div>

                <!--end:: Widgets/Sale Reports-->
            </div>
        </div>

  </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('.remove').click(function () {
                if(confirm('Are You Sure ?')) {
                    $.ajax({
                        url: $(this).data('url'),
                        type: 'post',
                        dataType: 'json',
                        data: {'id': $(this).data('id'), '_method': 'delete', '_token': $('input[name="_token"]').val()},
                        success: function (json) {
                            if(json.redirect){
                                 window.location = json.redirect;
                            }
                        }
                    });
                }
            });
        });
    </script>
@endsection