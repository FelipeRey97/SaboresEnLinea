<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class ImageController extends Controller{

    public function store(Request $request)
    {
        $image = $request->file('file');

        $imageName = Str::uuid() . "." . $image->extension();
        $imagePath = public_path('uploads');
        
        $image->move($imagePath, $imageName);
        
        return response()->json(["Imagen" =>  $imageName]);
    }
}