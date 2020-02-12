<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Brand;
use DB;
use Validator,Redirect,File;
use Session;

class NewsController extends Controller
{
    // Backend

    public function index() {
  
        $news = News::all();
    	return view('admin.news.index-news')->with('news',$news);
    }

    public function add() {

        return view('admin.news.add-news');
    }
    
    // Hàm thêm bài viết
    public function addNews(Request $request) {

    	$news = new News;

    	$news->title            = $request->title;
    	$news->unmarked_title   = $request->unmarked_title;
    	$news->description      = $request->description;
    	$news->image            = $request->image;
    	$news->content          = $request->content;
    	$news->status           = $request->status;

    	if($request->hasFile('image')) {
        	$file = $request->file('image');
        	$name = $file->getClientOriginalName();
        	$file->move('uploads/news/',$name);
        	$news->image = $name;

        }
        $news->save();
        $request->session()->flash('message', 'Thêm bài viết thành công!');

        return redirect('/admin/news');

    }
    
    // Hàm xóa bài viết
    public function delete($id) {
        
        $news = News::find($id);
        $news->delete();

        return redirect('/admin/news');
    }

    //==============//
    // Frontend
     
    // Hàm hiển thị chi tiết tin tức
    public function detail($news_id) {
        // Lấy ra tin tức theo id
    	$news = DB::table('news')->where('id','=',$news_id)->get();
    	foreach ($news as $key => $value) {
            $id = $value->id;
        }
        $relateNews= DB::table('news')->whereNotIN('news.id',[$id])->get();       
        $brands = Brand::where('status',0)->orderby('id','asc')->get();
    	return view('index.news.details')->with('brands',$brands)->with('news',$news)->with('relate',$relateNews);
    }

    // Hàm hiển thị toàn bộ tin tức
    public function show() {

    	$news = News::all();
    	foreach ($news as $key => $value) {
            $id = $value->id;
        }
        $relateNews= DB::table('news')->whereNotIN('news.id',[$id])->get(); 
        $brands = Brand::where('status',0)->orderby('id','asc')->get();
    	return view('index.news.index')->with('brands',$brands)->with('news',$news)->with('relate',$relateNews);
    }

}
