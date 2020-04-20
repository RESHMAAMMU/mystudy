<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('register');
    }
    public function register()
    {
        return view('new_registration');
    }
}
