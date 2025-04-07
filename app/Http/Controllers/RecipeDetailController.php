<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipeDetailController extends Controller
{
    public function index()
    {
        return view('pages/RecipeDetail');
    }
}
