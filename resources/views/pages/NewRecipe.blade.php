@extends('layouts.app')

@section('title', 'Nueva Receta')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <section class="NewRecipe_Section">
        <h2>Nueva Receta</h2>
        <div class="Publication_forms">
            <form class="NewRecipe_Form" action="/NewRecipe" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Título de la receta:</label>
                    <input type="text" name="title" id="title" placeholder="Ingrese el Título de la receta">
                    @error('title') <small class="error-msg">{{ $message }}</small> @enderror
                </div>
                <div class="Ingredientes" id="Ingredient_List">
                    <label for="ingrediente">Ingredientes</label>
                    @php
                        $ingredientes = old('ingredient', ['']); // Si no hay ingredientes, pon uno vacío
                    @endphp

                    @foreach ($ingredientes as $i => $ingrediente)
                    @if ($loop->first)
                            @error('ingredient.*') <small class="error-msg">{{ $message }}</small> @enderror
                        @endif
                    
                    <div class="Ingrediente" id="Ingredient_content">
                        <input type="text" name="ingredient[]" id="ingrediente" value="{{ $ingrediente }}" placeholder="250 gr de Harina de Trigo ">
                        <button type="button" class="remove_ingrediente" id="remove_ingrediente" >X</button>
                    </div>
                    @endforeach
                    <button type="button" id="add_ingrediente" > + Nuevo Ingrediente</button>
                </div>

                <div class="form-group">
                    <label for="Procedimiento">Procedimiento:</label>
                    <textarea name="Procedimiento" id="Procedimiento" placeholder="Explique el procedimiento"></textarea>
                    @error('Procedimiento') <small class="error-msg">{{ $message }}</small> @enderror
                </div>

                <div class="form-group">
                <label for="dificult">Nivel de Dificultad:</label>
                <select name="dificult" id="dificult" >
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value="1">Principiante</option>
                    <option value="2">Intermedio</option>
                    <option value="3">Avanzado</option>
                    <option value="4">Experto</option>
                </select>
                @error('dificult') <small class="error-msg">{{ $message }}</small> @enderror
                </div>

                <div class="form-group">
                <label for="category">Categoría:</label>
                <select name="category" id="category" >
                    <option value="" disabled selected>Seleccione una opción</option>
                    <option value="4">Plato Principal</option>
                    <option value="1">Postre</option>
                    <option value="2">Ensalada</option>
                    <option value="3">Sopa</option>
                </select>
                @error('category') <small class="error-msg">{{ $message }}</small> @enderror
                </div>

                <input type="hidden" name="recip_Image" value="{{ old('recip_Image') }}">
                @error('recip_Image') <small class="error-msg">{{ $message }}</small> @enderror
                @auth
                <input type="hidden" name="user_id" value="{{ auth()->user()->user_id }}">
                @endauth
                
                <button type="submit">Publicar Receta</button>
            </form>

            <form action="/Image"  enctype="multipart/form-data" method="POST" id="dropzone" class="dropzone">
            @csrf
            </form>
        </div>
    </section>

@endsection

@section('footer')
    @include('components.footer')
@endsection