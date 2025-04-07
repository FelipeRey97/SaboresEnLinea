<?php

namespace App\Http\Controllers;

class NewRecipeController extends Controller{

    public function index(){

        return view('pages/NewRecipe');
    }
}