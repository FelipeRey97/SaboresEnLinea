@extends('layouts.app')

@section('title', 'Detalle Receta')

@section('header')
    @include('components.header')
@endsection

@section('content')

<article class="recipe_detail">
    <h2>{{ $recipe->recip_name }}</h2>

    <div class="Recipe_Image">
        <img src="{{ asset('uploads/' . $recipe->recip_Image) }}" alt="image about a tasty lasagna" width="400" height="400">
    </div>

    <div>
    <h3>Autor: {{ $recipe->user->user_name ?? 'Sin autor' }} {{ $recipe->user->user_lastname ?? 'Sin autor' }}</h3>
    <h4>Categoría: {{ $recipe->recipecategories->recipCat_name ?? 'Sin categoría' }}</h4>

        <section class="Ingredients">
            <h3>Ingredientes</h3>
            <ul>
                @foreach ($recipe->ingredient as $ingr)
                    <li>{{ $ingr->ingr_name }}</li>
                @endforeach
            </ul>
        </section>

        <section class="Crafting">
            <h3>Elaboración</h3>
            <p>{{ $recipe->recip_procedure }}</p>
        </section>
    </div>
</article>

<section class="Related_Recipes">
    <h2>Recetas relacionadas</h2>
    <article class="Recipe_Card">
        <div class="Recipe_Card_Image">
            <img src="{{ asset('images/articles/pexels-abhinavcoca-291528.jpg') }}" alt="">
        </div>
        <h3>Title</h3>
        <p>Autor</p>
    </article>

    <article class="Recipe_Card" >
        <div class="Recipe_Card_Image">
            <img src="{{ asset('images/articles/pexels-ash-craig-122861-376464.jpg') }}" alt="">
        </div>
        <h3>Title</h3>
        <p>Autor</p>
    </article>

    <article class="Recipe_Card" >
        <div class="Recipe_Card_Image">
            <img src="{{ asset('images/articles/pexels-catscoming-406152.jpg') }}" alt="">
        </div>
        <h3>Title</h3>
        <p>Autor</p>
    </article>
</section>

<section class="Related_Recipes">
    <h2>Explorar</h2>

    <article class="Recipe_Card" >
        <div class="Recipe_Card_Image">
            <img src="{{ asset('images/articles/pexels-chanwalrus-958545.jpg') }}" alt="">
        </div>
        <h3>Title</h3>
        <p>Autor</p>
    </article>

    <article class="Recipe_Card" >
        <div class="Recipe_Card_Image">
            <img src="{{ asset('images/articles/pexels-ella-olsson-572949-1640772.jpg') }}" alt="">
        </div>
        <h3>Title</h3>
        <p>Autor</p>
    </article>

    <article class="Recipe_Card" >
        <div class="Recipe_Card_Image">
            <img src="{{ asset('images/articles/pexels-rajesh-tp-749235-1603901.jpg') }}" alt="">
        </div>    
        <h3>Title</h3>
        <p>Autor</p>
    </article>
</section>


@endsection

@section('footer')
    @include('components.footer')
@endsection