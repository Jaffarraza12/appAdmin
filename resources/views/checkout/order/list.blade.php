@extends('layout.master')
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
        <div class="row">
            <div class="col-xl-12">

                <!--begin:: Widgets/Sale Reports-->
                <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                    <div class="kt-portlet__head">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                                All Orders
                            </h3>
                        </div>
                     </div>
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
                                                <td style="width:20%">Client</td>
                                                <td style="width:10%">Date</td>
                                                <td style="width:14%">Sales</td>
                                                <td style="width:15%">Shipping</td>
                                                <td style="width:15%">Status</td>
                                                <td style="width:15%" class="kt-align-right">Total</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($orders as $order)
                                                <tr>
                                                    <td>
                                                        <label class="kt-checkbox kt-checkbox--single">
                                                            <input type="checkbox"><span></span>
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <span class="kt-widget11__title">{{$order->order_id}}</span>
                                                    </td>
                                                    <td>
                                                        <span class="kt-widget11__title">{{$order->name}}</span>
                                                        <span class="kt-widget11__sub"><a >#{{$order->cart_id}}</a></span>
                                                    </td>
                                                    <td></td>
                                                    <td>{{number_format($order->sub_total)}}</td>
                                                    <td>{{number_format($order->shipping)}}</td>
                                                    @php
                                                        $cls = '';

                                                if($order->status == 'Processing')
                                                   $cls = 'kt-badge kt-badge--inline kt-badge--warning';
                                                elseif($order->status == 'Completed')
                                                   $cls = 'kt-badge kt-badge--inline kt-badge--success';
                                                elseif($order->status == 'Pending')
                                                   $cls = 'kt-badge kt-badge--inline kt-badge--danger';
                                                elseif($order->status == 'Cancel')
                                                   $cls = 'kt-badge kt-badge--inline kt-badge--dark';
                                                    @endphp

                                                    <td><span class="{{$cls}}">{{$order->status}}</span></td>
                                                    <td class="kt-align-right kt-font-brand  kt-font-bold">{{number_format($order->grant_total)}} RS</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="kt-widget11__action kt-align-right">
                                        <button type="button" class="btn btn-label-success btn-bold btn-sm">More Orders</button>
                                    </div>
                                </div>

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