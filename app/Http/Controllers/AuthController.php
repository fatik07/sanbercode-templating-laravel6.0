<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form()
    {
        return view('form');
    }
    public function welcome()
    {
        return view('welcome');
    }

    public function welcome_post(Request $request)
    {
        $first_name = $request['firstname'];
        $last_name = $request['lastname'];
        return view('welcome')->with('firstname', $first_name)->with('lastname', $last_name);
    }
}
