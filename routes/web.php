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



//BACK_END
Route::get('/back', function () {
    return view('back_end.index');
});

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

//MEMBER
Route::get('/back/member', 'MemberController@MemberList');

Route::get('/back/member/search', 'MemberController@MemberSearchResult');
Route::post('/back/member/search/', 'MemberController@MemberSearch');

//create
Route::get('/back/member/create', 'MemberController@MemberCreate');
Route::post('/back/member/create', 'MemberController@MemberSave');
//update
Route::get('/back/member/edit/', 'MemberController@MemberEdit');
Route::post('/back/member/edit/', 'MemberController@MemberUpdate');



// FRONT_END
Route::get('/front', function () {
    return view('welcome');
});

Route::get('/front/about', function (){
    return view('front_end.about');
});
// Route::get('/Causes', 'CausesController@Causes')->name('Causes');
// Route::get('/Contact', 'ContactController@Contact')->name('Contact');
// Route::get('/Event', 'EventController@Event')->name('Event');
// Route::get('/Donate', 'DonateController@Donate')->name('Donate');


Route::get('/front/shop', function (){
    return view('front_end.shop');
});
Route::get('/front/causes', function () {
    return view('front_end.causes');
});
Route::get('/front/contact', function () {
    return view('front_end.contact');
});
Route::get('/front/event', function () {
    return view('front_end.event');
});
Route::get('/front/donate', function () {
    return view('front_end.donate');
});
Route::get('/front/home', function () {
    return view('front_end.home');
});
// phần sự kiện
Route::get('/front/causes_child', function () {
    return view('front_end.Causes.causes_child');
});

Route::get('/front/causes_disabilities', function () {
    return view('front_end.Causes.causes_disabilities');
});
Route::get('/front/causes_homeless', function () {
    return view('front_end.Causes.causes_homeless');
});
Route::get('/front/causes_poor', function () {
    return view('front_end.Causes.causes_poor');
});
// font đăng kí
Route::get('/front/registration', function () {
    return view('front_end.registration.Registration');
});
// font chi tiết
Route::get('/front/detail_up', function () {
    return view('front_end.detail.detail_up');
});
Route::get('/front/detail_fe', function () {
    return view('front_end.detail.detail_fe');
});
// đăng kí/ đăng nhập
Route::get('/front/login', function () {
    return view('front_end.Login.login');
});

// stripe donate
Route::get('/NGO-v3/public/front/donate', 'StripePaymentController@stripe');
Route::post('/NGO-v3/public/front/donate', 'StripePaymentController@stripePost')->name('stripe.post');