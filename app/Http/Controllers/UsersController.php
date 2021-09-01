<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
     public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }
    public function edit(Request $request)
    {
        $user = User::find($id);
        
        return view('users.edit', compact('user'));
    }
    
    public function update(Request $request, $id)
    {
        $user = User::find($id);
    
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