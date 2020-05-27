<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use  DataTables;
const ACTIVE =1;

class AdminController extends Controller
{
    public function datatable()
    {
        return view('users_list');
    }
    public function list()
    {
        $listAll=User::where('active',ACTIVE)->get();
        return \DataTables::of($listAll)->make(true);
       
    }
}
