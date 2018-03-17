<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ModelController\RestaurantController;

class RestaurantDashboardController extends Controller
{
    public function index()
    {
        //
    }

    public function getListRestaurant() {
        return RestaurantController::getAllRestaurant();
    }
}
