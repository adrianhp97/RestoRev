<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ModelController\RestaurantController;
use App\Http\Controllers\ModelController\TopRestaurantController;

class HomeController extends Controller
{
    public function index()
    {
        $topRestaurant = TopRestaurantController::getAllTopRestaurant();
        $listRestaurant = RestaurantController::getAllRestaurant();
        $data = array(
            'topRestaurant' => $topRestaurant,
            'listRestaurant' => $listRestaurant
        );
        return view('client.index')
            ->with($data);
    }
}
