<?php

namespace App\Http\Controllers\ModelController;

use App\GetPromotion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class GetPromotionController extends Controller
{
    public function store(Request $request)
    {
        return GetPromotion::create($request);
    }

    public function destroy($user_id, $restaurant_id)
    {
        $whereArray = array('user_id' => $user_id, 'restaurant_id' => $restaurant_id);
        $query = DB::table('get_promotion');
        foreach($whereArray as $field => $value) {
            $query->where($field, $value);
        }
        return $query->delete();
    }
    
    public static function destroyByUser($user_id)
    {
        return DB::table('get_promotion')->where('user_id', '=', $user_id)->delete();
    }

    public static function destroyByRestaurant($restaurant_id)
    {
        return DB::table('get_promotion')->where('restaurant_id', '=', $restaurant_id)->delete();
    }

    public static function getAllUserByRestaurant($restaurant_id)
    {
        return DB::select(DB::raw("SELECT restaurant_id, user_id, email
            FROM member_voucher 
            WHERE member_voucher.restaurant_id = $restaurant_id
            "));
    }
}
