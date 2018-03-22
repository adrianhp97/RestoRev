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

/*
|--------------------------------------------------------------------------
| Dashboard Route
|--------------------------------------------------------------------------
*/

Route::get('/admin', 'LoginController@index')->name('login');

Route::post('/loginProcess', 'LoginController@login')->name('loginProcess');

Route::group(['middleware' => 'checkuser'], function() {
    Route::get('/admin/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/admin/restaurant', 'RestaurantDashboardController@index')->name('dashboard-restaurant');

    Route::get('/admin/restaurant/top', 'TopRestaurantDashboardController@index')->name('dashboard-top-restaurant');

    Route::get('/admin/restaurant/review', 'ReviewDashboardController@index')->name('dashboard-review');

    Route::get('/admin/restaurant/review/{restaurant_id}', 'ReviewDashboardController@getRestaurantById')->name('dashboard-review-spec');

    Route::get('/admin/restaurant/voucher', 'VoucherDashboardController@index')->name('dashboard-voucher');

    Route::get('/admin/restaurant/voucher/{restaurant_id}', 'VoucherDashboardController@getRestaurantById')->name('dashboard-voucher-spec');

    Route::get('/admin/member', 'UserDashboardController@index')->name('dashboard-member');

    Route::get('/admin/member/voucher/', 'UserGetVoucherDashboardController@index')->name('dashboard-member-voucher');

    Route::get('/admin/member/voucher/{restaurant}', 'UserGetVoucherDashboardController@getRestaurantById')->name('dashboard-member-voucher-spec');;

    Route::get('/logout', 'LoginController@logout')->name('logout');
});

/*
|--------------------------------------------------------------------------
| Client Route
|--------------------------------------------------------------------------
*/

Route::get('/', 'HomeController@index')->name('client-index');

Route::get('/about', function () {
    return view('client.about');
})->name('client-about');

Route::get('/review/{restaurant_id}', function () {
    return view('client.review_restaurant');
})->name('client-review');


Route::get('/member', 'MemberController@index')->name('client-member');

Route::get('/partnership', 'PartnershipController@index')->name('client-partnership');

Route::get('/promo', 'PromoController@index')->name('client-promo');

/*
|--------------------------------------------------------------------------
| Tables Route
|--------------------------------------------------------------------------
*/

Route::get('/getListMember', 'UserDashboardController@getListMember');

Route::get('/getListRestaurant', 'RestaurantDashboardController@getListRestaurant');

Route::get('/getListTopRestaurant', 'TopRestaurantDashboardController@getListTopRestaurant');

Route::get('/getListVoucher/{restaurant_id}', 'VoucherDashboardController@getAllVoucherByRestaurant');

Route::get('/getListReview/{restaurant_id}', 'ReviewDashboardController@getAllReviewByRestaurant');

Route::get('/getListMemberVoucher/{restaurant_id}', 'UserGetVoucherDashboardController@getAllUserByRestaurant');

/*
|--------------------------------------------------------------------------
| Insert Data Route
|--------------------------------------------------------------------------
*/
Route::post('/insertMember', 'MemberController@store');

Route::post('/insertRestaurant', 'RestaurantDashboardController@store');

Route::post('/insertTopRestaurant', 'TopRestaurantDashboardController@store');

Route::post('/insertVoucher', 'VoucherDashboardController@store');

Route::post('/insertReview', 'ReviewController@store');

Route::post('/insertMemberVoucher', 'PromoController@store');

/*
|--------------------------------------------------------------------------
| Delete Data Route
|--------------------------------------------------------------------------
*/
Route::post('/deleteMember', 'UserDashboardController@destroy');

Route::post('/deleteRestaurant', 'RestaurantDashboardController@destroy');

Route::post('/deleteTopRestaurant', 'TopRestaurantDashboardController@destroy');

Route::post('/deleteVoucher', 'VoucherDashboardController@destroy');

Route::post('/deleteReview', 'ReviewDashboardController@destroy');

Route::post('/deleteMemberVoucher', 'UserGetVoucherDashboardController@destroy');

/*
|--------------------------------------------------------------------------
| update Data Route
|--------------------------------------------------------------------------
*/
Route::post('/updateMember', 'UserDashboardController@update');

Route::post('/updateRestaurant', 'RestaurantDashboardController@update');

Route::post('/updateTopRestaurant', 'TopRestaurantDashboardController@update');

Route::post('/updateVoucher', 'VoucherDashboardController@update');

Route::post('/updateReview', 'ReviewDashboardController@update');

Route::post('/updateMemberVoucher', 'UserGetVoucherDashboardController@update');

/*
|--------------------------------------------------------------------------
| others Data Route
|--------------------------------------------------------------------------
*/

Route::post('home/loaddata','HomeController@loadDataAjax' );
