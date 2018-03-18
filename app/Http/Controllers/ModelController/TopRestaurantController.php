<?php

namespace App\Http\Controllers\ModelController;

use App\TopRestaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopRestaurantController extends Controller
{
    public static function store(Request $request)
    {
        return TopRestaurant::create($request);
    }

    public static function destroy($restaurant_id)
    {
        $top_restaurant = TopRestaurant::where('restaurant_id', '=', $restaurant_id)->first();
        if ($top_restaurant === null) {
            return "No Record";
        } else {
            return DB::table('top_restaurant')->where('restaurant_id', '=', $restaurant_id)->delete();
        }
    }

    public static function getAllTopRestaurant() {
        $restaurant = TopRestaurant::All();
        return $restaurant->toArray();
    }
}
