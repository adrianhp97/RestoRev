<?php

namespace App\Http\Controllers\ModelController;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public static function store(Request $request)
    {
        return User::Create($request->all());
    }

    public static function destroy($user_id)
    {
        return DB::table('users')->where('user_id', '=', $user_id)->delete();
    }

    public static function getAllUser() {
        $user = User::All();
        return $user->toArray();
    }
}
