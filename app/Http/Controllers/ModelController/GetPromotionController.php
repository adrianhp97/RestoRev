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

    public function destroy($user_id, $code)
    {
        $whereArray = array('user_id' => $user_id, 'code' => $code);
        $query = DB::table('get_promotion');
        foreach($whereArray as $field => $value) {
            $query->where($field, $value);
        }
        return $query->delete();
    }
    
    public static function destroyByUser($user_id)
    {
        $get_promotion = GetPromotion::where('user_id', '=', $user_id)->first();
        if ($get_promotion === null) {
            return "No Record";
        } else {
            return DB::table('get_promotion')->where('user_id', '=', $user_id)->delete();
        }
    }

    public static function destroyByCode($code)
    {
        $get_promotion = GetPromotion::where('code', '=', $code)->first();
        if ($get_promotion === null) {
            return "No Record";
        } else {
            return DB::table('get_promotion')->where('code', '=', $code)->delete();
        }
    }

    public static function getAllUserByVoucher($code)
    {
        return DB::select(DB::raw("SELECT code, user_id, email
            FROM member_voucher 
            WHERE member_voucher.code = $code
            "));
    }

    public static function checkAttribute($email, $code)
    {
        $promo = DB::select(DB::raw("SELECT code, user_id, email
                FROM member_voucher 
                WHERE member_voucher.email = '$email' AND
                    member_voucher.code = '$code';
            "));
        if (count($promo) > 0) {
            return "true";
        }
        else {
            return "false";
        }
    }
}
