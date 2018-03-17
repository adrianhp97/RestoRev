<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ModelController\TopRestaurantController;

class TopRestaurantDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.top_restaurant');
    }

    public function store(Request $request)
    {
        return TopRestaurantController::store($request);
    }
}
