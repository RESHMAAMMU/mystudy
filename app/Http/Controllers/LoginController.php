<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $user = User::where('email', $request->email)->where('active',1)->first();
        // dd($request);

      if ($user['email'] === $request->email) {

          if($user['is_admin'] == 1 )
          {
            return redirect()->route('list-datatable');
          }
          else{
            return redirect()->route('user-show',['id'=>$user['id']]);
          
            }
        
      } else {
        return back()->with('error', 'Your credentials dont match our records');
      }
    }

    public function logout(){
      Auth::logout();
      return redirect()->route('login');
    }
}
