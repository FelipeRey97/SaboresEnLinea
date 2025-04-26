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

    public function randomRecipe()
    {
        $recipe = Recipe::inRandomOrder()->first(); // 🔥 Esto trae una receta random

        if (!$recipe) {
            // En caso de que no haya recetas en la BD
            return redirect()->route('home')->with('error', 'No hay recetas disponibles.');
        }

        return view('pages.RecipeDetail', compact('recipe'));
    }
}
