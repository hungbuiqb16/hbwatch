<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Products;
use DB;
use Validator,Redirect,File;
use Session;

class BrandController extends Controller
{
	private $pathViewController = 'admin.brand.';
	public function index() {
        //Lấy dữ liệu từ database
        $brands = DB::table('brand')->get();
    	return view($this->pathViewController.'index-brand')->with('brands',$brands);
    }

    public function add() {
    	return view($this->pathViewController.'add-brand');
    }

    public function save(Request $request) {

    	$this->validate($request,[
            'name'=>'required',
            'status'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    	]);

    	$brand = new Brand();

    	$brand->name = $request->input('name');
    	$brand->status = $request->input('status');
    	$brand->image = $request->input('image');

    	if($request->hasFile('image')) {
    	    $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move('uploads/brands/',$name);
            $brand->image = $name;
    	}
    	$brand->save();
    	// Session::flash('success','Thêm thương hiệu thành công!');
    	$request->session()->flash('message', 'Thêm thương hiệu thành công!');
    	return redirect('/admin/brand');

    }
    
    function edit($id) {
    	$brands = DB::table('brand')->where('id',$id)->get();
    	return view($this->pathViewController.'edit-brand')->with('brands',$brands);
    }

    function update(Request $request,$id) {
        $brand = Brand::find($id);
    	$brand->name = $request->input('name');
    	$brand->status = $request->input('status');
    	$brand->image = $request->input('image');        
    	
    	if($request->hasFile('image')) {
    	    $file = $request->file('image');
            $name = $file->getClientOriginalName();
            $file->move('uploads/brands/',$name);
            $brand->image = $name;
    	}
    	$brand->save();
    	$request->session()->flash('message', 'Chỉnh sửa thương hiệu thành công!');
    	return redirect('/admin/brand');
    }

    function delete($id) {
    	DB::table('brand')->where('id',$id)->delete();
    	Session::flash('message','Xóa thương hiệu thành công!');
    	return redirect('/admin/brand');
    }
    // end

    function showProduct($brand_id) {
        $brands = Brand::where('status',0)->orderby('id','asc')->get();
        $products= DB::table('brand')->join('products', 'products.product_category_id','=','brand.id')->where('products.product_category_id',$brand_id)->get();
        foreach ($products as $key => $value) {
            $productsBrandId = $value->product_category_id;
        }
        $latestProduct= DB::table('brand')->join('products', 'products.product_category_id','=','brand.id')->where('products.product_category_id',$productsBrandId)->take(5)->get();
        return view('index.brand')->with('brands',$brands)->with('products',$products)->with('latestProduct',$latestProduct);
    }
    
}
