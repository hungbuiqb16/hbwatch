<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Products;
use App\Models\Shipping;
use App\Models\Orders;
use App\Models\Order_details;
use DB;
use Validator,Redirect,File;
use Session;
use Cart;

class CheckoutController extends Controller
{
    public function loginCheckout() {
    	$brands = Brand::where('status',0)->orderby('id','asc')->get();
    	$customer = Session::get('customer_id');
    	if($customer){
    		return view('index.checkout')->with('brands',$brands);
    	} else {
    		return view('index.account')->with('brands',$brands); 
    	}
    	
    }

    public function checkout() {
    	$brands = Brand::where('status',0)->orderby('id','asc')->get();
    	return view('index.checkout')->with('brands',$brands);
    }

    public function saveCheckout(Request $request) {

        // insert to shipping

    	$data = new Shipping;

    	$data->name    = $request->name;
    	$data->email   = $request->email;
    	$data->phone   = $request->phone;
    	$data->address = $request->address;
    	$data->note    = $request->note;
    	$data->payment = $request->payment;
    	$data->status  = 'Đang chờ xử lý';

        $data->save();
        Session::put('shipping_id',$data->id);

       // insert to order

    	$order = new Orders;

    	$order->customer_id = Session::get('customer_id');
    	$order->shipping_id = Session::get('shipping_id');
    	$order->total       = Cart::subtotal();
    	$order->status      = 'Đang chờ xử lý';

    	$order->save();
        Session::put('order_id',$order->id);
        
        // insert to order_details
        $content = Cart::content();
        foreach ($content as $value) {
	        $order_detail =  new Order_details;

            $order_detail->order_id      = Session::get('order_id');
	        $order_detail->product_id    = $value->id;
	        $order_detail->product_name  = $value->name;
	        $order_detail->product_qty   = $value->qty;
	        $order_detail->product_price = $value->price;

	        $order_detail->save();
        }
        Cart::destroy();
    	return redirect('/thanh-cong');
    	
    }

    public function success() {

    	$brands = Brand::where('status',0)->orderby('id','asc')->get();
    	return view('index.payment')->with('brands',$brands);
    }
}
