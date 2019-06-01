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
                    <a href="{{URL('product/create')}}">
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
                                                <td style="width:10%">Image</td>
                                                <td style="width:20%">Name</td>
                                                <td style="width:20%">SKU</td>
                                                <td style="width:20%">Qty</td>
                                                 <td style="width:15%">Status</td>
                                                <td style="width:2%" class="kt-align-right">Action</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($products as $product)
                                                <tr>
                                                    <td>
                                                        <label class="kt-checkbox kt-checkbox--single">
                                                            <input type="checkbox"><span></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <span class="kt-widget11__title">{{$product->product_id}}</span>
                                                    </td>
                                                    <td>
                                                        <img src="{{$catalog_path.$product->image}}" width="50"/>
                                                    </td>
                                                    <td>
                                                        {{$product->name}}
                                                    </td>
                                                    <td>
                                                        {{$product->sku}}
                                                    </td>
                                                    @php
                                                    if($product->status == 1){
                                                        $cls = 'btn btn-success btn-elevate';
                                                        $txt = 'ENABLED';
                                                    } else {
                                                        $cls = 'btn btn-danger btn-elevate';
                                                        $txt = 'DISABLED';
                                                    }

                                                @endphp

                                                    <td>{{$product->quantity}}</td>
                                                    <td><span class="{{$cls}}">{{$txt}}</span></td>
                                                    <td><a href="{{URL('product/'.$product->product_id)}}"><i class="flaticon2-edit"></i></a>   <a data-url="{{URL("product/".$product->product_id)}}" data-id="{{$product->product_id}}" class="remove"><i class="flaticon-delete"></i></a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $products->links() }}
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


    <select class="ui fluid search dropdown" multiple="">
        <option value="">State</option>
        <option value="AL">Alabama</option>
        <option value="AK">Alaska</option>
        <option value="AZ">Arizona</option>
        <option value="AR">Arkansas</option>
        <option value="CA">California</option>
        <option value="CO">Colorado</option>
        <option value="CT">Connecticut</option>
        <option value="DE">Delaware</option>
        <option value="DC">District Of Columbia</option>
        <option value="FL">Florida</option>
        <option value="GA">Georgia</option>
        <option value="HI">Hawaii</option>
        <option value="ID">Idaho</option>
        <option value="IL">Illinois</option>
        <option value="IN">Indiana</option>
        <option value="IA">Iowa</option>
        <option value="KS">Kansas</option>
        <option value="KY">Kentucky</option>
        <option value="LA">Louisiana</option>
        <option value="ME">Maine</option>
        <option value="MD">Maryland</option>
        <option value="MA">Massachusetts</option>
        <option value="MI">Michigan</option>
        <option value="MN">Minnesota</option>
        <option value="MS">Mississippi</option>
        <option value="MO">Missouri</option>
        <option value="MT">Montana</option>
        <option value="NE">Nebraska</option>
        <option value="NV">Nevada</option>
        <option value="NH">New Hampshire</option>
        <option value="NJ">New Jersey</option>
        <option value="NM">New Mexico</option>
        <option value="NY">New York</option>
        <option value="NC">North Carolina</option>
        <option value="ND">North Dakota</option>
        <option value="OH">Ohio</option>
        <option value="OK">Oklahoma</option>
        <option value="OR">Oregon</option>
        <option value="PA">Pennsylvania</option>
        <option value="RI">Rhode Island</option>
        <option value="SC">South Carolina</option>
        <option value="SD">South Dakota</option>
        <option value="TN">Tennessee</option>
        <option value="TX">Texas</option>
        <option value="UT">Utah</option>
        <option value="VT">Vermont</option>
        <option value="VA">Virginia</option>
        <option value="WA">Washington</option>
        <option value="WV">West Virginia</option>
        <option value="WI">Wisconsin</option>
        <option value="WY">Wyoming</option>
    </select>

@endsection

@section('js')


    <script>
        $(document).ready(function() {

        });
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