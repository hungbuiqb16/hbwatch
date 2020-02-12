<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use DB;
use Validator,Redirect,File;
use Session;
use Cart;

class CustomerController extends Controller
{
    public function register(Request $request) {

    	$customer = new Customers;

        $customer->fname = $request->fname;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->password = $request->password;
        $customer->passwordAgain = $request->passwordAgain;

        if($customer->password == $customer->passwordAgain ) {
            $customer->save();
            //Lấy session của customer vừa đăng ký
            Session::put('customer_id',$customer->id);
            Session::put('customer_fname',$customer->fname);
            //Trả về trang thanh toán
            return redirect('/thanh-toan');
        } else {
        	return 'dang ky tai khoan khong thanh cong'; 
        }


    }

    public function postLogin(Request $request) {
    	$name = $request->name;
    	$password =$request->password;

    	$result = DB::table('customers')->where('name',$name)->where('password',$password)->first();
        $cart = Cart::count();
    	if($result && $cart!= NULL) {
    		Session::put('customer_id',$result->id);
    		Session::put('customer_fname',$result->fname);
    		return  redirect('/thanh-toan');
    	} elseif($result && $cart == NULL){
            Session::put('customer_id',$result->id);
            Session::put('customer_fname',$result->fname);
            return  redirect('/');
        }else {
    		Session::put('error','Đăng nhập không thành công!');
    		return redirect('tai-khoan');
    	}

    }

    public function logout() {
    	session()->put('customer_fname',null);
        session()->put('customer_id', null);
    	return redirect('/');
    }
}
