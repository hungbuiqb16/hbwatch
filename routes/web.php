<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//--- Frontend ---
Route::get('/', 'HomeController@index');
Route::post('/tim-kiem','HomeController@search');
Route::get('/thuong-hieu/{brand_id}','BrandController@showProduct');
Route::get('/chi-tiet-san-pham/{product_id}','ProductController@showDetail');
    // Gio-hang
    Route::group(['prefix' => 'gio-hang'], function() { 
        Route::post('/','CartController@cartDetail');
        Route::get('/','CartController@showCart');
        Route::get('/delete/{rowId}','CartController@delete');
        Route::post('/update','CartController@update');
    });

// Customer
Route::post('/dang-ky','CustomerController@register');
Route::post('/dang-nhap', 'CustomerController@postLogin');
Route::get('/dang-xuat', 'CustomerController@logout');
// Checkout
Route::get('/tai-khoan','CheckoutController@loginCheckout');
Route::get('/thanh-toan', 'CheckoutController@checkout');
Route::post('/luu-thanh-toan','CheckoutController@saveCheckout');
Route::get('/thanh-cong','CheckoutController@success');
//Blog/News
Route::get('/tin-tuc/{id}','NewsController@detail');
Route::get('/tin-tuc/','NewsController@show');



//--- Backend ---

Route::group(['prefix' => 'admin'], function() {
	
	// Admin
	Route::get('/','AdminController@index');
    Route::get('/login','AdminController@getLogin');
    Route::post('/login','AdminController@postLogin');
    Route::get('/logout','AdminController@logout');
    
    // Product
    Route::group(['prefix' => 'product'], function() {
        Route::get('/','ProductController@index');
        Route::get('/add','ProductController@add');
        Route::post('/add','ProductController@save');
        Route::get('/edit/{id}','ProductController@edit');
        Route::post('/update/{id}','ProductController@update');
        Route::get('/delete/{id}','ProductController@delete');
    });

    // Brand
    $prefix = 'brand';
    Route::group(['prefix' => $prefix], function() use($prefix) {
    	$controller =  ucfirst($prefix).'Controller@';
    	Route::get('/',$controller.'index');
    	Route::get('/add',$controller.'add');
    	Route::post('/add',$controller.'save');
    	Route::get('/edit/{id}',$controller.'edit');
    	Route::post('/update/{id}',$controller.'update');
    	Route::get('/delete/{id}',$controller.'delete');
        
    });

    // Order
    Route::group(['prefix'=>'order'], function() {
        Route::get('/','OrderController@index' );
        Route::get('/view/{id}','OrderController@view');
        Route::get('/delete/{id}','OrderController@delete');
    });
    //Blog/News
    Route::group(['prefix'=>'news'], function() {
        Route::get('/','NewsController@index' );
        Route::post('/add','NewsController@addNews');
        Route::get('/add','NewsController@add' );
        Route::get('/delete/{id}', 'NewsController@delete');
    });
});


