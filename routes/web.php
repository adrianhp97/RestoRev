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

Route::get('/admin', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/admin/restaurant', function () {
    return view('dashboard.list_restaurant');
})->name('dashboard-restaurant');

Route::get('/admin/restaurant/top', function () {
    return view('dashboard.top_restaurant');
})->name('dashboard-top-restaurant');

Route::get('/admin/restaurant/review', 'ReviewDashboardController@index')->name('dashboard-review');

Route::get('/admin/restaurant/review/{restaurant_id}', 'ReviewDashboardController@getRestaurantById')->name('dashboard-review-spec');

Route::get('/admin/restaurant/voucher', 'VoucherDashboardController@index')->name('dashboard-voucher');

Route::get('/admin/restaurant/voucher/{restaurant_id}', 'VoucherDashboardController@getRestaurantById')->name('dashboard-voucher-spec');

Route::get('/admin/member', function () {
    return view('dashboard.list_member');
})->name('dashboard-member');

Route::get('/admin/member/voucher/', 'UserGetVoucherDashboardController@index')->name('dashboard-member-voucher');

Route::get('/admin/member/voucher/{restaurant}', 'UserGetVoucherDashboardController@getRestaurantById')->name('dashboard-member-voucher-spec');;

/*
|--------------------------------------------------------------------------
| Client Route
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('client.index');
})->name('client-index');

Route::get('/about', function () {
    return view('client.about');
})->name('client-about');

Route::get('/member', function () {
    return view('client.member');
})->name('client-member');

Route::get('/partnership', function () {
    return view('client.partnership');
})->name('client-partnership');

Route::get('/promo', function () {
    return view('client.promo');
})->name('client-promo');



/*
|--------------------------------------------------------------------------
| Tables Route
|--------------------------------------------------------------------------
*/

Route::get('/getListMember', 'UserDashboardController@getListMember');

Route::get('/getListRestaurant', 'RestaurantDashboardController@getListRestaurant');

Route::get('/getListVoucher/{restaurant_id}', 'VoucherDashboardController@getAllVoucherByRestaurant');

Route::get('/getListReview/{restaurant_id}', 'ReviewDashboardController@getAllReviewByRestaurant');

Route::get('/getListMemberVoucher/{restaurant_id}', 'UserGetVoucherDashboardController@getAllUserByRestaurant');