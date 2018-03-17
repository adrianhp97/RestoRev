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
        return DB::table('top_restaurant')->where('restaurant_id', '=', $restaurant_id)->delete();
    }
}
