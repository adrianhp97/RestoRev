<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ModelController\RestaurantController;

class PartnershipController extends Controller
{
    public function index()
    {
        $listRestaurant = RestaurantController::getAllRestaurant();
        $data = array(
            'listRestaurant' => $listRestaurant
        );
        return view('client.partnership')
            ->with($data);
    }
}
