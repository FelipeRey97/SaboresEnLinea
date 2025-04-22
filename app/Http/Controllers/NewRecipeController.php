<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewRecipeController extends Controller{

    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){

       return view('pages/NewRecipe');
    }

    public function store(Request $request){

        $validated = $request->validate([
            'title' => 'required|max:50',
            'ingredient' => 'required|array|min:1',
            'ingredient.*' => 'required|max:50',
            'Procedimiento' => 'required',
            'dificult' => 'required',
            'recip_Image' => 'required',
            'category' => 'required',
        ]);
        

        $recipe = new Recipe();
        $recipe->recip_name = $request->title;
        $recipe->recip_Image = $request->recip_Image;
        $recipe->recip_userId = $request->user_id;
        $recipe->recip_categoriesId = $request->category;
        $recipe->recip_statusId = 1;
        $recipe->recip_difficultId = $request->dificult;
        $recipe->save(); // Aquí ya tienes el ID 🎯

        foreach ($request->ingredient as $ingredientName) {
            Ingredient::create([
                'ingr_name' => $ingredientName,
                'ingr_recipeId' => $recipe->recip_id,
            ]);
        }

        return redirect()->route('NewRecipe')->with('success', 'Receta creada correctamente.');
    }
}