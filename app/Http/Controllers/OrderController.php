<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\Order_details;
use DB;
use Validator,Redirect,File;
use Session;

class OrderController extends Controller
{
	// Hiển thị toàn bộ đơn hàng
    public function index() {

    	$order = DB::table('order')->join('customers','order.customer_id','=','customers.id')->select('order.*','customers.fname')->orderby('order.id','desc')->get();
    	return view('admin.order.index')->with('orders',$order);
    }
    // Hiển thị chi tiết đơn hàng
    public function view($id) {

        // Lấy thông tin chi tiết đơn hàng
    	$order =  DB::table('order_details')->join('order','order_details.order_id','=','order.id')->where('order.id',$id)->select('order_details.*','order.total')->get();

    	// Lấy thông vận chuyển
    	$shipping = DB::table('shipping')->join('order','shipping_id','=','shipping.id')->where('order.id',$id)->get();

    	//Lấy thông tin khách hàng

    	$customer = DB::table('customers')->join('order','order.customer_id','=','customers.id')->where('order.id',$id)->get();

    	return view('admin.order.view')->with('order',$order)->with('customer',$customer)->with('shipping',$shipping);
    }

    // Xóa đơn hàng
    public function delete($id) {
         
        $order = Orders::find($id);
        $order->delete();
        Session::flash('message','Xóa đơn hàng thành công');

        return redirect('/admin/order');
    }
}
