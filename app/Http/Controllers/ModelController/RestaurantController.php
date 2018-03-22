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
        $restaurant = new Restaurant($request->all());
        return DB::select(DB::raw("INSERT INTO restaurant
            VALUE(
                '$restaurant->restaurant_id',
                '$restaurant->name',
                '$restaurant->address',
                '$restaurant->city',
                '$restaurant->phone_number',
                $restaurant->price_bottom,
                $restaurant->price_top,
                '$restaurant->img_url',
                $restaurant->rating,
                $restaurant->counter_rating,
                null,
                null);
            "));
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

    public static function getLimitRestaurant()
    {
        return Restaurant::orderBy('restaurant_id','DESC')->limit(6)->get();
    }

    public static function getLimitRestaurantByCondition($restaurant_id)
    {
        try 
        {
            return DB::select(DB::raw("SELECT *
                FROM restaurant
                WHERE restaurant_id < $restaurant_id
                ORDER BY restaurant_id DESC
                LIMIT 6;
            "));
        } catch(\Exception $e){
            // do task when error
            return $e->getMessage();   // insert query
        }
    }
}
