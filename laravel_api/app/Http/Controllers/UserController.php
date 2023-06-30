<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function all_users()
    {
        $users = User::all();

        return $users->toJson();
    }

    public function single_user($id)
    {
        $user = User::find($id);

        return $user->toJson();
    }

    public function create_user(Request $request)
    {
//        $username = $request->input('username');
//        $name = $request->input('name');
//        $password = $request->input('password');
//        $email = $request->input('email');
        $data = $request->all();
        $user = User::create($data);

        return $user->toJson();


    }

}
