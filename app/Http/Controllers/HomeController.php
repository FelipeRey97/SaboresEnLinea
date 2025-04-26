<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Recipecategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        $recipes = Recipe::with('ingredient', 'recipecategories', 'user')->get();
        $categories = Recipecategory::with('recipe')->get();
        return view('pages/HomePage', compact('recipes'), compact('categories'));
    }
}
