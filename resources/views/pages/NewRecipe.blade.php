@extends('layouts.app')

@section('title', 'Nueva Receta')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <section class="NewRecipe_Section">
        <h2>Nueva Receta</h2>
        <form class="NewRecipe_Form" action="#" method="post">

            <label for="title">Título de la receta:</label>
            <input type="text" name="title" id="title" placeholder="Ingrese el Título de la receta">
            
            <div class="Ingredientes">
                <div class="Ingrediente">

                    <label for="ingrediente">Ingrediente</label>
                    <input type="text" name="ingrediente" id="ingrediente" placeholder="Harina de Trigo">

                    <Label for="Cantidad">Cuánto:</Label>
                    <input type="text" name="cantidad" id="cantidad" placeholder="500 gramos">

                </div>
                <button> + Nuevo Ingrediente</button>
            </div>

            <label for="Procedimiento">Procedimiento:</label>
            <textarea name="Procedimiento" id="Procedimiento" placeholder="Explique el procedimiento"></textarea>

            <label for="dificult">Nivel de Dificultad:</label>
            <select name="dificult" id="dificult" >
                <option value="" disabled selected>Seleccione una opción</option>
                <option value="Principiante">Principiante</option>
                <option value="Intermedio">Intermedio</option>
                <option value="Avanzado">Avanzado</option>
                <option value="Experto">Experto</option>
            </select>
            
            <label for="recipeImage">Imagen de la Receta</label>
            <input type="file" id="recipeImage" name="recipeImage">

            <button type="submit">Publicar Receta</button>
        </form>
    </section>

@endsection

@section('footer')
    @include('components.footer')
@endsection