<?php

namespace App\Http\Controllers\Checkout;

use App\Http\Model\Checkout\Order;
use App\Http\model\localization\Zone;
use App\Http\model\localization\ZoneCity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    //

    public function index(){
        $orders =  Order::orderBy('order_id', 'desc')->get();


        return view('checkout.order.list',compact('orders'));

    }
    public function create(){
        $country_id = 162;
        $order =  new Order();
        $heading = 'Edit Order';
        $zones = Zone::where('country_id',$country_id)->get();
        $cities = ZoneCity::where('zone_id',$order->shipping_zone)->get();

        return view('checkout.order.form',compact('order','heading','zones','cities'));
    }
    public function store(Request $request){}
    public function show($id){
        $country_id = 162;
        $order =  Order::where('order_id',$id)->first();
        $heading = 'Edit Order';
        $zones = Zone::where('country_id',$country_id)->get();
        $cities = ZoneCity::where('zone_id',$order->shipping_zone)->get();

        return view('checkout.order.form',compact('order','heading','zones','cities'));
    }
    public function edit($id){}
    public function update(Request $request){}
    public function destroy(Request $request){}



    public function success($id)
    {
        $order = Order::where('order_id',$id)->first();

        return view ('checkout.success',compact('order'));




    }
}
