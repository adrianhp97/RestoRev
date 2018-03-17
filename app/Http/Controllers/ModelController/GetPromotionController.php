<?php

namespace App\Http\Controllers\ModelController;

use App\GetPromotion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GetPromotionController extends Controller
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
     * @param  \App\GetPromotion  $getPromotion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GetPromotion $getPromotion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GetPromotion  $getPromotion
     * @return \Illuminate\Http\Response
     */
    public function destroy(GetPromotion $getPromotion)
    {
        //
    }

    public static function getAllUserByRestaurant($restaurant_id)
    {
        return DB::select(DB::raw("SELECT restaurant_id, user_id, email
            FROM member_voucher 
            WHERE member_voucher.restaurant_id = $restaurant_id
            "));
    }
}
