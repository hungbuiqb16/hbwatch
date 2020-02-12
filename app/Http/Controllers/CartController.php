<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Products;
use DB;
use Validator,Redirect,File;
use Session;
use Cart;

class CartController extends Controller
{
    public function cartDetail(Request $request) {

    	$product_id = $request->product_id;
    	$product_info = DB::table('products')->where('id',$product_id)->first();

    	$data['id'] = $product_id;
    	$data['qty'] = '1';
    	$data['name'] = $product_info->name;
    	$data['price'] = $product_info->price;
    	$data['weight'] = $product_info->price;
    	$data['options']['image'] = $product_info->image;

    	Cart::add($data);
        // Cart::destroy();

        return redirect('/gio-hang');
    }
    public function showCart() {
        $brands = Brand::where('status',0)->orderby('id','asc')->get();
    	return view('index.cart')->with('brands',$brands);
    }

    public function delete($rowId) {
    	Cart::remove($rowId);
    	return redirect('/gio-hang');
    }

    public function update(Request $request) {
        $rowId = $request->rowId;
        $qty   = $request->quantity;

        Cart::update($rowId,$qty);
        return redirect('/gio-hang');
    }
}
