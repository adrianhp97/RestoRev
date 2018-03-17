<?php

namespace App\Http\Controllers\ModelController;

use App\Voucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoucherController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voucher $voucher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voucher  $voucher
     * @return \Illuminate\Http\Response
     */
    public function destroy($code)
    {
        DB::table('voucher')->where('code', '=', $code)->delete();
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
