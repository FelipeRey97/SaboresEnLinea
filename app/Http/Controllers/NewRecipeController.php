<?php

namespace App\Http\Controllers;

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
        
        if($validated){

            Recipe::create([
                
                'recip_name' => $request->title,
                'recip_Image' => $request->recip_Image, 
                'recip_userId' => $request->user_id,  
                'recip_categoriesId' => $request->category, 
                'recip_statusId' => 1, 
                'recip_difficultId' => $request->dificult, 
            ]);
        }
    }
}