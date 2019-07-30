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

Route::get('/', function () {
    return view('back_end.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//MEMBER
Route::get('/member', 'MemberController@MemberList');

Route::get('/member/search', 'MemberController@MemberSearchResult');
Route::post('/member/search/', 'MemberController@MemberSearch');

//create
Route::get('/member/create', 'MemberController@MemberCreate');
Route::post('/member/create', 'MemberController@MemberSave');
//update
Route::get('/member/edit/', 'MemberController@MemberEdit');
Route::post('/member/edit/', 'MemberController@MemberUpdate');













//ADMIN
Route::get('/admin', 'AdminController@AdminList');

Route::get('/admin/search', 'AdminController@AdminSearchResult');
Route::post('/admin/search/', 'AdminController@AdminSearch');

//create
Route::get('/admin/create', 'AdminController@AdminCreate');
Route::post('/admin/create', 'AdminController@AdminSave');
//update
Route::get('/admin/edit/', 'AdminController@AdminEdit');
Route::post('/admin/edit/', 'AdminController@AdminUpdate');

//PRODUCT
Route::get('/product/', 'ProductController@ProductList');

Route::get('/product/search', 'ProductController@ProductSearchResult');
Route::post('/product/search/', 'ProductController@ProductSearch');

Route::get('/product/create', 'ProductController@ProductCreate');
Route::post('/product/create', 'ProductController@ProductSave');

Route::get('/product/edit', 'ProductController@ProductEdit');
Route::post('/product/edit', 'ProductController@ProductUpdate');

Route::get('/product/delete/{product_id}', 'ProductController@ProductDelete');

//PRODUCER
Route::get('/producer/{producer_id}', 'ProducerController@ProductList');

//CUSTOMER
Route::get('/customer', 'CustomerController@CustomerList');




//Route::group(["middleware"=>"admin.auth"],function (){
//    Route::group(["prefix"=>"product"],function (){
//        Route::get('/', 'ProductController@ProductList');
//
//        Route::get('/create', 'ProductController@ProductCreate');
//        Route::post('/create', 'ProductController@ProductSave');
//
//        Route::get('/edit', 'ProductController@ProductEdit');
//        Route::post('/edit', 'ProductController@ProductUpdate');
//
//        Route::get('/delete/{product_id}', 'ProductController@ProductDelete');
//
//    });
//});