<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ModelController\UserController;

class UserDashboardController extends Controller
{
    public function index()
    {
        //
    }

    public function getListMember() {
        return UserController::getAllUser();
    }
}
