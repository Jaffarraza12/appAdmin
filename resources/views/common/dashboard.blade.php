@extends('layout.master')

@section('header')
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">
                Minimized Aside </h3>
            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
                <a href="#" class="kt-subheader__breadcrumbs-home"><i class="flaticon2-shelter"></i></a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    General </a>
                <span class="kt-subheader__breadcrumbs-separator"></span>
                <a href="" class="kt-subheader__breadcrumbs-link">
                    Minimized Aside </a>

                <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
        </div>
        <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
             </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="kt-portlet">
        <div class="kt-portlet__body  kt-portlet__body--fit">
            <div class="row row-no-padding row-col-separator-xl">
                <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::Total Profit-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Total Sales
                                </h4>
                                <span class="kt-widget24__desc">
															All Customs Value
														</span>
                            </div>
                            <span class="kt-widget24__stats kt-font-brand">

														{{$totalSales}}
													</span>
                        </div>
                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
                            <span class="kt-widget24__number">
														78%
													</span>
                        </div>
                    </div>

                    <!--end::Total Profit-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::New Feedbacks-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Earned Sales
                                </h4>
                                <span class="kt-widget24__desc">
															Order whose status completed
														</span>
                            </div>
                            <span class="kt-widget24__stats kt-font-success">
														{{$earnedSales}}
													</span>
                        </div>
                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-success" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
                            <span class="kt-widget24__number">
														84%
													</span>
                        </div>
                    </div>

                    <!--end::New Feedbacks-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::New Orders-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                    Orders
                                </h4>
                                <span class="kt-widget24__desc">
															Total Order
														</span>
                            </div>
                            <span class="kt-widget24__stats kt-font-danger">
														{{$totalOrder}}
													</span>
                        </div>
                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
                            <span class="kt-widget24__number">
														69%
													</span>
                        </div>
                    </div>

                    <!--end::New Orders-->
                </div>
                <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::New Users-->
                    <div class="kt-widget24">
                        <div class="kt-widget24__details">
                            <div class="kt-widget24__info">
                                <h4 class="kt-widget24__title">
                                     Users
                                </h4>
                                <span class="kt-widget24__desc">
															Total Registered User
														</span>
                            </div>
                            <span class="kt-widget24__stats kt-font-dark">
														{{ $userCount}}
													</span>
                        </div>
                        <div class="progress progress--sm">
                            <div class="progress-bar kt-bg-dark" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="kt-widget24__action">
													<span class="kt-widget24__change">
														Change
													</span>
                            <span class="kt-widget24__number">
														90%
													</span>
                        </div>
                    </div>

                    <!--end::New Users-->
                </div>
            </div>
        </div>
    </div>

    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-6">

            <!--begin:: Widgets/Sale Reports-->
            <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Sales Reports
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
                            <li class="nav-item" style="display:none;">
                                <a class="nav-link hidden" data-toggle="tab" href="#kt_widget11_tab1_content" role="tab">
                                    Last Month
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget11_tab2_content" role="tab">
                                    All Time
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">

                    <!--Begin::Tab Content-->
                    <div class="tab-content">

                        <!--begin::tab 1 content-->
                        <div class="tab-pane hidden" style="display:none;" id="kt_widget11_tab1_content">

                            <!--begin::Widget 11-->
                            <div class="kt-widget11">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <td style="width:1%">#</td>
                                            <td style="width:40%">Application</td>
                                            <td style="width:14%">Sales</td>
                                            <td style="width:15%">Change</td>
                                            <td style="width:15%">Status</td>
                                            <td style="width:15%" class="kt-align-right">Total</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single">
                                                    <input type="checkbox"><span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <a href="#" class="kt-widget11__title">Loop</a>
                                                <span class="kt-widget11__sub">CRM System</span>
                                            </td>
                                            <td>19,200</td>
                                            <td>$63</td>
                                            <td><span class="kt-badge kt-badge--inline kt-badge--brand">new</span></td>
                                            <td class="kt-align-right kt-font-brand kt-font-bold">$34,740</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <a href="#" class="kt-widget11__title">Selto</a>
                                                <span class="kt-widget11__sub">Powerful Website Builder</span>
                                            </td>
                                            <td>24,310</td>
                                            <td>$39</td>
                                            <td><span class="kt-badge kt-badge--inline kt-badge--success">approved</span></td>
                                            <td class="kt-align-right kt-font-brand kt-font-bold">$46,010</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <a href="#" class="kt-widget11__title">Jippo</a>
                                                <span class="kt-widget11__sub">The Best Selling App</span>
                                            </td>
                                            <td>9,076</td>
                                            <td>$105</td>
                                            <td><span class="kt-badge kt-badge--inline kt-badge--warning">pending</span></td>
                                            <td class="kt-align-right kt-font-brand kt-font-bold">$67,800</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="kt-checkbox kt-checkbox--single"><input type="checkbox"><span></span></label>
                                            </td>
                                            <td>
                                                <a href="#" class="kt-widget11__title">Verto</a>
                                                <span class="kt-widget11__sub">Web Development Tool</span>
                                            </td>
                                            <td>11,094</td>
                                            <td>$16</td>
                                            <td><span class="kt-badge kt-badge--inline kt-badge--danger">on hold</span></td>
                                            <td class="kt-align-right kt-font-brand kt-font-bold">$18,520</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="kt-widget11__action kt-align-right">
                                    <button type="button" class="btn btn-label-brand btn-bold btn-sm">Import Report</button>
                                </div>
                            </div>

                            <!--end::Widget 11-->
                        </div>

                        <!--end::tab 1 content-->

                        <!--begin::tab 2 content-->
                        <div class="tab-pane active" id="kt_widget11_tab2_content">

                            <!--begin::Widget 11-->
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
        <div class="col-xl-6">

            <!--begin:: Widgets/Order Statistics-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Order Statistics
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <a href="#" class="btn btn-label-brand btn-bold btn-sm dropdown-toggle" data-toggle="dropdown">
                            Export
                        </a>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">

                            <!--begin::Nav-->
                            <ul class="kt-nav">
                                <li class="kt-nav__head">
                                    Export Options
                                    <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                                        <span class="kt-nav__link-text">Activity</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                        <span class="kt-nav__link-text">FAQ</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-link"></i>
                                        <span class="kt-nav__link-text">Settings</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                        <span class="kt-nav__link-text">Support</span>
                                        <span class="kt-nav__link-badge">
																	<span class="kt-badge kt-badge--success">5</span>
																</span>
                                    </a>
                                </li>
                                <li class="kt-nav__separator"></li>
                                <li class="kt-nav__foot">
                                    <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>
                                    <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                                </li>
                            </ul>

                            <!--end::Nav-->
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body kt-portlet__body--fluid">
                    <div class="kt-widget12">
                        <div class="kt-widget12__content">
                            <div class="kt-widget12__item">
                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Annual Taxes EMS</span>
                                    <span class="kt-widget12__value">{{$earnedSales}} RS</span>
                                </div>
                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Finance Review Date</span>
                                    <span class="kt-widget12__value">{{date('M d,Y',time())}}</span>
                                </div>
                            </div>
                            <div class="kt-widget12__item">
                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Avarage Revenue</span>
                                    <span class="kt-widget12__value">$60M</span>
                                </div>
                                <div class="kt-widget12__info">
                                    <span class="kt-widget12__desc">Revenue Margin</span>
                                    <div class="kt-widget12__progress">
                                        <div class="progress kt-progress--sm">
                                            <div class="progress-bar kt-bg-brand" role="progressbar" style="width: 40%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <span class="kt-widget12__stat">
																	40%
																</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="kt-widget12__chart" style="height:250px;">
                            <canvas id="kt_chart_order_statistics"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Order Statistics-->
        </div>
    </div>

    <!--End::Section-->

    <!--Begin::Section-->
    <div class="row">
        <div class="col-xl-4">

            <!--begin:: Widgets/New Users-->
            <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            New Users
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">
                                    Today
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content" role="tab">
                                    Month
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget4_tab1_content">
                            <div class="kt-widget4">
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="./assets/media/users/100_4.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Anna Strong
                                        </a>
                                        <p class="kt-widget4__text">
                                            Visual Designer,Google Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-brand btn-bold">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="./assets/media/users/100_14.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Milano Esco
                                        </a>
                                        <p class="kt-widget4__text">
                                            Product Designer, Apple Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-warning btn-bold">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="./assets/media/users/100_11.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Nick Bold
                                        </a>
                                        <p class="kt-widget4__text">
                                            Web Developer, Facebook Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-danger btn-bold">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="./assets/media/users/100_1.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Wiltor Delton
                                        </a>
                                        <p class="kt-widget4__text">
                                            Project Manager, Amazon Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-success btn-bold">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="./assets/media/users/100_5.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Nick Stone
                                        </a>
                                        <p class="kt-widget4__text">
                                            Visual Designer, Github Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-primary btn-bold">Follow</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget4_tab2_content">
                            <div class="kt-widget4">
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="./assets/media/users/100_2.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Kristika Bold
                                        </a>
                                        <p class="kt-widget4__text">
                                            Product Designer,Apple Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-success">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="./assets/media/users/100_13.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Ron Silk
                                        </a>
                                        <p class="kt-widget4__text">
                                            Release Manager, Loop Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-brand">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="./assets/media/users/100_9.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Nick Bold
                                        </a>
                                        <p class="kt-widget4__text">
                                            Web Developer, Facebook Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-danger">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="./assets/media/users/100_2.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Wiltor Delton
                                        </a>
                                        <p class="kt-widget4__text">
                                            Project Manager, Amazon Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-success">Follow</a>
                                </div>
                                <div class="kt-widget4__item">
                                    <div class="kt-widget4__pic kt-widget4__pic--pic">
                                        <img src="./assets/media/users/100_8.jpg" alt="">
                                    </div>
                                    <div class="kt-widget4__info">
                                        <a href="#" class="kt-widget4__username">
                                            Nick Bold
                                        </a>
                                        <p class="kt-widget4__text">
                                            Web Developer, Facebook Inc
                                        </p>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-label-info">Follow</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/New Users-->
        </div>

        <div class="col-xl-4">

            <!--begin:: Widgets/Audit Log-->
            <div class="kt-portlet kt-portlet--height-fluid">
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">
                            Latest Log
                        </h3>
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        <ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab11_content" role="tab">
                                    Today
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab12_content" role="tab">
                                    Week
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#kt_widget4_tab13_content" role="tab">
                                    Month
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="kt_widget4_tab11_content">
                            <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                <div class="kt-list-timeline">
                                    <div class="kt-list-timeline__items">
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">12 new users registered</span>
                                            <span class="kt-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>
                                            <span class="kt-list-timeline__time">14 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                            <span class="kt-list-timeline__text">Production server down</span>
                                            <span class="kt-list-timeline__time">3 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">Production server up</span>
                                            <span class="kt-list-timeline__time">5 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                            <span class="kt-list-timeline__time">7 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">12 new users registered</span>
                                            <span class="kt-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>
                                            <span class="kt-list-timeline__time">14 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                            <span class="kt-list-timeline__text">Production server down</span>
                                            <span class="kt-list-timeline__time">3 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">Production server up</span>
                                            <span class="kt-list-timeline__time">5 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                            <span class="kt-list-timeline__time">7 hrs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget4_tab12_content">
                            <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                <div class="kt-list-timeline">
                                    <div class="kt-list-timeline__items">
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">12 new users registered</span>
                                            <span class="kt-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">pending</span></span>
                                            <span class="kt-list-timeline__time">14 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                            <span class="kt-list-timeline__text">Production server down</span>
                                            <span class="kt-list-timeline__time">3 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">Production server up</span>
                                            <span class="kt-list-timeline__time">5 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                            <span class="kt-list-timeline__time">7 hrs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="kt_widget4_tab13_content">
                            <div class="kt-scroll" data-scroll="true" data-height="400" style="height: 400px;">
                                <div class="kt-list-timeline">
                                    <div class="kt-list-timeline__items">
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span href="" class="kt-list-timeline__text">New order received <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill">urgent</span></span>
                                            <span class="kt-list-timeline__time">7 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">12 new users registered</span>
                                            <span class="kt-list-timeline__time">Just now</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">System shutdown <span class="kt-badge kt-badge--warning kt-badge--inline kt-badge--pill">pending</span></span>
                                            <span class="kt-list-timeline__time">14 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--info kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--danger"></span>
                                            <span class="kt-list-timeline__text">New invoice received</span>
                                            <span class="kt-list-timeline__time">20 mins</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--success"></span>
                                            <span class="kt-list-timeline__text">DB overloaded 80% <span class="kt-badge kt-badge--success kt-badge--inline kt-badge--pill">settled</span></span>
                                            <span class="kt-list-timeline__time">1 hr</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--warning"></span>
                                            <span class="kt-list-timeline__text">System error - <a href="#" class="kt-link">Check</a></span>
                                            <span class="kt-list-timeline__time">2 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--brand"></span>
                                            <span class="kt-list-timeline__text">Production server down</span>
                                            <span class="kt-list-timeline__time">3 hrs</span>
                                        </div>
                                        <div class="kt-list-timeline__item">
                                            <span class="kt-list-timeline__badge kt-list-timeline__badge--info"></span>
                                            <span class="kt-list-timeline__text">Production server up</span>
                                            <span class="kt-list-timeline__time">5 hrs</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Audit Log-->
        </div>
        <div class="col-xl-4">

            <!--begin:: Widgets/Blog-->
            <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                    <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url({{asset('assets/media//products/product4.jpg')}})">
                        <h3 class="kt-widget19__title kt-font-light">
                            Introducing New Feature
                        </h3>
                        <div class="kt-widget19__shadow"></div>
                        <div class="kt-widget19__labels">
                            <a href="#" class="btn btn-label-light-o2 btn-bold btn-sm ">Recent</a>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__body">
                    <div class="kt-widget19__wrapper">
                        <div class="kt-widget19__content">
                            <div class="kt-widget19__userpic">
                                <img src="{{asset('assets/media//users/user1.jpg')}}" alt="">
                            </div>
                            <div class="kt-widget19__info">
                                <a href="#" class="kt-widget19__username">
                                    Anna Krox
                                </a>
                                <span class="kt-widget19__time">
															UX/UI Designer, Google
														</span>
                            </div>
                            <div class="kt-widget19__stats">
														<span class="kt-widget19__number kt-font-brand">
															18
														</span>
                                <a href="#" class="kt-widget19__comment">
                                    Comments
                                </a>
                            </div>
                        </div>
                        <div class="kt-widget19__text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting scrambled a type specimen book text of the dummy text of the printing printing and typesetting industry scrambled dummy text of the printing.
                        </div>
                    </div>
                    <div class="kt-widget19__action">
                        <a href="#" class="btn btn-sm btn-label-brand btn-bold">Read More...</a>
                    </div>
                </div>
            </div>

            <!--end:: Widgets/Blog-->
        </div>
    </div>

    <!--End::Section-->




    <!--End::Dashboard 6-->
</div>
@endsection