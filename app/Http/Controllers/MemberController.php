<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ModelController\UserController;

class MemberController extends Controller
{
    public function index()
    {
        return view('client.member');
    }

    public function store(Request $request)
    {
        return UserController::store($request);
    }
}
