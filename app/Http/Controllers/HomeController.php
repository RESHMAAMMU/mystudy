<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeScreen()
    {
        return view('home.home_page');
    }
    
}
