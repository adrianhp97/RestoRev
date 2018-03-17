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

Route::get('/admin', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

Route::get('/admin/restaurant', function () {
    return view('dashboard.list_restaurant');
})->name('dashboard-restaurant');

Route::get('/admin/restaurant/top', function () {
    return view('dashboard.top_restaurant');
})->name('dashboard-top-restaurant');

Route::get('/admin/restaurant/review', function () {
    return view('dashboard.review');
})->name('dashboard-review');

Route::get('/admin/restaurant/review/{restaurant}', function () {
    return view('dashboard.review');
});

Route::get('/admin/restaurant/voucher', function () {
    return view('dashboard.voucher');
})->name('dashboard-voucher');

Route::get('/admin/restaurant/voucher/{restaurant}', function () {
    return view('dashboard.voucher');
});

Route::get('/admin/member', function () {
    return view('dashboard.list_member');
})->name('dashboard-member');

Route::get('/admin/member/voucher/', function () {
    return view('dashboard.member_voucher');
})->name('dashboard-member-voucher');

Route::get('/admin/member/voucher/{restaurant}', function () {
    return view('dashboard.member_voucher');
});

Route::get('/home', function () {
    return view('welcome');
})->name('home');


