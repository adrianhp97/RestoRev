<?php

namespace App\Http\Controllers\ModelController;

use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class RestaurantController extends Controller
{
    public static function store(Request $request)
    {
        return Restaurant::Create($request->all());
    }

    public static function update(Request $request)
    {
        try {
            $restaurant_id = $request->get('pk');
            $name = $request->get('name');
            $value = $request->get('value');
            $results = DB::select(DB::raw("UPDATE restaurant
                SET restaurant.$name = '$value'
                WHERE tabel_potongan.restaurant_id = $restaurant_id;
            "));
            return $request;
        } catch(\Exception $e){
            // do task when error
            return $e->getMessage();   // insert query
        }
        
    }

    public static function destroy($restaurant_id)
    {
        return DB::table('restaurant')->where('restaurant_id', '=', $restaurant_id)->delete();
    }

    public static function getAllRestaurant() {
        $restaurant = Restaurant::All();
        return $restaurant->toArray();
    }

    public static function getRestaurantById($restaurant_id)
    {
        return Restaurant::All()->where('restaurant_id', $restaurant_id)->first()->toArray();
    }
}
