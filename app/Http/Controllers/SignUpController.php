<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignUpController extends Controller {

    public function index()
    {

        return view('pages/SignUpPage');
    }

    public function store(Request $request)
    {   
        //Request Validation
        $validated = $request->validate([
            'name' => 'required|max:50',
            'lastname' => 'required|max:50',
            'email' => 'required|email|unique:users,user_email',
            'password' => 'required|min:8|confirmed'
        ]);

        //User creation
        
        if($validated){
           
            $user = User::create([
                'user_name' => $request->name,
                'user_lastname' => $request->lastname,
                'user_email' => $request->email,
                'user_password' => Hash::make($request->password),
                'user_status' => 1,
                'user_rolId' => 2
            ]);

            //Session start
            Auth::login($user);

            //Redirect the user after complete registration
            return redirect()->route('NewRecipe');
        }
    }
}