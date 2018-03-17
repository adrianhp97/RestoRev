<?php

namespace App\Http\Controllers\ModelController;

use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    public static function store(Request $request)
    {
        return Restaurant::Create($request->all());
    }

    public static function update(Request $request)
    {
        $restaurant = Restaurant::findOrFail($request->get('pk'));
        $name = $request->get('name');
        $value = $request->get('value');
        $restaurant->$name = $value;
        $restaurant->save();
        return $restaurant->toJson();
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
