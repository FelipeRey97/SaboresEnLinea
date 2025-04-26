<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeDetailController extends Controller
{
    public function show($recip_id)
    {
    $recipe = Recipe::with('ingredient', 'user', 'recipecategories')->findOrFail($recip_id);

    return view('pages.RecipeDetail', compact('recipe'));
    }
}
