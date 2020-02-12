<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Brand;
use App\Models\News;
use DB;
use Validator,Redirect,File;
use Session;

class HomeController extends Controller
{
	function index() {
        //Lấy data từ database
        $brands = Brand::where('status',0)->orderby('id','asc')->get();
		$orient = Products::where('product_category_id',1)->take(8)->get();
		$seiko = Products::where('product_category_id',2)->take(8)->get();
		$casio = Products::where('product_category_id',3)->take(8)->get();
		$citizen = Products::where('product_category_id',4)->take(8)->get();
        $lastestProduct = Products::orderBy('id','desc')->take(8)->get();
        $randomProcduct = Products::inRandomOrder()->take(8)->get();
		$news = News::all();
		return view('index.home')->with('brands',$brands)->with('orient',$orient)->with('seiko',$seiko)->with('casio',$casio)->with('citizen',$citizen)->with('news',$news)->with('lastest',$lastestProduct)->with('random',$randomProcduct);
	}

	function account() {
		return view('index.account');
	}

	function register() {
		return view('index.register');
	}

	function search(Request $request) {

		$keyword = $request->contents;
		$results = DB::table('products')->where('name','like','%'.$keyword.'%')->get();
        
		$brands = Brand::where('status',0)->orderby('id','asc')->get();
    	return view('index.search')->with('brands',$brands)->with('results',$results);
	}

}


