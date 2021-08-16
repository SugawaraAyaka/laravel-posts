<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
     public function index()
    {
        
        return view('welcome', [
            'users' => $users,
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $user=\Auth::user();
    
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->password_confirmation=$request->input('password_confirmation');
        $user->save();
    
        $data=[
            'user' => $user,
        ];
        
        return view('users.show',$data);
    
  }
}
