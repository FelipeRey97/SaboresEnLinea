<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller {

    public function index()
    {

        return view('pages/SignUpPage');
    }

    public function store(Request $request)
    {   

        $validated = $request->validate([
            'name' => 'required|max:50',
            'lastname' => 'required|max:50',
            'email' => 'required|email|unique:users,user_email',
            'password' => 'required|min:8|confirmed'
        ]);
        
        if($validated){
           
            User::create([
                'user_name' => $request->name,
                'user_lastname' => $request->lastname,
                'user_email' => $request->email,
                'user_password' => $request->password,
                'user_status' => 1,
                'user_rolId' => 1
            ]);
        }
    }
}