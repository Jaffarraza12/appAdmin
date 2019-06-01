<?php

namespace App\Http\Controllers\Common;

use App\Http\Model\Checkout\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    function index(){

        $order = DB::table('order');
        $orders =  $order->orderBy('order_id', 'desc')->limit(5)->get();
        $totalSales = number_format($order->sum('grant_total'),0);
        $totalOrder = $order->count();
        $earnedSales = number_format($order->where('status','Completed')->sum('grant_total'),0);
        $userCount = 0;

        return view('common.dashboard',compact('totalSales','earnedSales','totalOrder','userCount'
            ,'orders'
        ));
    }
}
