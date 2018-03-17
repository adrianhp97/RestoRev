<?php

namespace App\Http\Controllers\ModelController;

use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return Restaurant::Create($request->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $restaurant = Restaurant::findOrFail($request->get('pk'));
        $name = $request->get('name');
        $value = $request->get('value');
        $restaurant->$name = $value;
        $restaurant->save();
        return $restaurant->toJson();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy($restaurant_id)
    {
        DB::table('restaurant')->where('restaurant_id', '=', $restaurant_id)->delete();
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
