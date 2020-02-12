<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
class AdminController extends Controller
{
    function index() {
    	return view('admin.index');
    }

    function getLogin() {
    	return view('admin.login');
    }

    function postLogin(Request $request) {
    	$username = $request->username;
    	$password = md5($request->password);

    	$result = DB::table('admin')->where('username',$username)->where('password',$password)->first();
        if($result) {
            session()->put('fname',$result->fname);
            session()->put('id', $result->id);
            return redirect('/admin');
        } else {
        	session()->put('error','Tên đăng nhập hoặc mật khẩu không đúng!');
        	return redirect('/admin/login');
        }
    }

    function logout() {
    	session()->put('fname',null);
        session()->put('id', null);
    	return redirect('/admin/login');
    }
}
