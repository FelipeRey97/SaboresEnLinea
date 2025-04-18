<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages/LogInPage');
    }

    public function store(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt([

            'user_email' => $request->email,
            'password' => $request->password

        ])) {
           
        }
        $request->session()->regenerate(); // Previene ataques de sesión
        return redirect()->route('NewRecipe');
    }
}
