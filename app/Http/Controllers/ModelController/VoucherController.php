<?php

namespace App\Http\Controllers\ModelController;

use App\Voucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoucherController extends Controller
{
    public static function store(Request $request)
    {
        return Voucher::Create($request->all());
    }

    public static function destroy($code)
    {
        DB::table('voucher')->where('code', '=', $code)->delete();
    }

    public static function destroyByRestaurant($restaurant_id)
    {
        DB::table('voucher')->where('restaurant_id', '=', $restaurant_id)->delete();
    }

    public static function getAllVoucher() 
    {
        $voucher = Voucher::All();
        return $voucher->toArray();
    }

    public static function getAllVoucherByRestaurant($restaurant_id) 
    {
        return Voucher::All()->where('restaurant_id', $restaurant_id)->toJson();
    }
}
