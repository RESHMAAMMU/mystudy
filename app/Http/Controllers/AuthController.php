<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\Hash;

const ADMIN=1;
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

    public function create(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email'=>'required|email|unique:users',
            'password' => 'required|min:3|max:20',
    		'confirm_password' => 'required|min:3|max:20|same:password'
            ]);

        $task = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'address'=>$request->address,
            'active' =>1,
            // 'is_admin' =>$request->is_admin ==1 ? 1: 0,
        ]
        );
        return view('user_details',compact('task'));

    }

    public function show($id)
    {
        $task=User::where('id',$id)->first();
        return view('user_details',compact('task'));
    }
    public function edit($id)
    {
        $user=User::where('id',$id)->first();
        return view('edit',compact('user'));
    }
    public function update($id,Request $request)
    {
        // $file = $request->file('image');
        //save format
        // $format = $request->img->extension();
        //save full adress of image
        // $patch = $request->img->store('images');

        // $name = $file->getClientOriginalName();
        // dd($request);
        $file=$request->img;
        // $file = $request->img->store('images'); 
        User::where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'image'=>$file
        ]);
        return redirect()->route('user-show',['id'=>$id]);
    }
}
