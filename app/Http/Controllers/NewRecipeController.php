<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class NewRecipeController extends Controller{

    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){

        dd(Auth::user());
    }
}