<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Products;
use App\Models\News;
use DB;
use Validator,Redirect,File;
use Session;

class ProductController extends Controller
{
    public function index() {
    	//Lấy data từ database
    	$products = Products::all();
    	return view('admin.product.index')->with('products',$products);
    }

    public function add() {
    	return view('admin.product.add-product');
    }

    public function save(Request $request) {
    	
    	$product = new Products();
        $product->name = $request->name;
        $product->product_category_id = $request->product_category_id;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->origin = $request->origin;
        $product->code = $request->code;
        $product->gender = $request->gender;
        $product->type = $request->type;
        $product->size = $request->size;
        $product->wire_type = $request->wire_type;
        $product->water_resistance = $request->water_resistance;
        $product->warranty = $request->warranty;
        $product->price = $request->price;
        $product->status = $request->status;

        if($request->hasFile('image')) {
        	$file = $request->file('image');
        	$name = $file->getClientOriginalName();
        	$file->move('uploads/products/',$name);
        	$product->image = $name;

        }
        $product->save();
        $request->session()->flash('message', 'Thêm sản phẩm thành công!');
        return redirect('/admin/product');
    }
    
    public function edit($id) {
    	$products = DB::table('products')->where('id',$id)->get();
    	return view('admin.product.edit-product')->with('products',$products);
    }
    
    public function update(Request $request,$id) {
        $product = Products::find($id);

        $product->name = $request->name;
        $product->product_category_id = $request->product_category_id;
        $product->description = $request->description;
        $product->image = $request->image;
        $product->origin = $request->origin;
        $product->code = $request->code;
        $product->gender = $request->gender;
        $product->type = $request->type;
        $product->size = $request->size;
        $product->wire_type = $request->wire_type;
        $product->water_resistance = $request->water_resistance;
        $product->warranty = $request->warranty;
        $product->price = $request->price;
        $product->status = $request->status;

        if($request->hasFile('image')) {
        	$file = $request->file('image');
        	$name = $file->getClientOriginalName();
        	$file->move('uploads/products/',$name);
        	$product->image = $name;

        }
        $product->save();
        $request->session()->flash('message', 'Chỉnh sửa sản phẩm thành công!');
        return redirect('/admin/product');

    }

    public function delete($id) {
    	$product = Products::find($id);
    	$product->delete();
    	Session::flash('message','Xóa sản phẩm thành công!');
    	return redirect('/admin/product');
    }

    //Start-Frontend
    public function showDetail($product_id) {
        $news = News::all();
        $brands = Brand::where('status',0)->orderby('id','asc')->get();
        $product= DB::table('brand')->join('products', 'products.product_category_id','=','brand.id')->where('products.id',$product_id)->get();
        foreach ($product as $key => $value) {
            $productsBrandId = $value->product_category_id;
        }
        $latestProduct= DB::table('brand')->join('products', 'products.product_category_id','=','brand.id')->where('products.product_category_id',$productsBrandId)->whereNotIN('products.id',[$product_id])->take(6)->get();
        return view('index.detail')->with('product',$product)->with('latestProduct',$latestProduct)->with('brands',$brands)->with('news',$news);
    }


}
