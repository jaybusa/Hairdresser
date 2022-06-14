<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\ParentCategory;
use App\Models\Category;
use App\Models\AdminSetting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Datatables;
use DB;
use Carbon\Carbon;
use App\Utils;
use Illuminate\Support\Str;



class OrdersController extends Controller {

    const ITEMS_PER_PAGE = 15;
    const TIME_FORMAT = 'Y-m-d H:i:s';
    
    public function orders(Request $request) {
        if($id = $request->id){
            if($id == 7){
                $orders = \App\Models\Order::with(['customer','hairdresser'])->where('order_status','=',7)->get();
            }else{
                $orders = \App\Models\Order::with(['customer','hairdresser'])->where('order_status','<',7)->where('order_status','<>',3)->get();
            }
            
        }else{
            $orders = \App\Models\Order::with(['customer','hairdresser'])->orderBy('id','desc')->get();    
        }
    	
        return view('admin.orders.list',['orders'=>$orders]);
    }

    public function order_detail(Request $request) {
    	$id = $request->id;
        $order = \App\Models\Order::detail($id);

        //pre($order->toArray());
        if($order) {
            return view('admin.orders.detail',['order'=>$order]);
        }
        return redirect()->route('admin.orders')->with(['danger'=>__('messages.orders_not_found')]);
    }
}
