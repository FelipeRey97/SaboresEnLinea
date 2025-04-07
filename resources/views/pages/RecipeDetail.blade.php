@extends('layouts.app')

@section('title', 'Detalle Receta')

@section('header')
    @include('components.header')
@endsection

@section('content')

<article class="recipe_detail">
    <h2>Lasagna Pesto</h2>

    <div class="Recipe_Image">
        <img src="{{ asset('images/Lasagna.webp') }}" alt="image about a tasty lasagna" width="400" height="400">
    </div>

    <div>
        <section class="Ingredients">
            <h3>Ingredientes</h3>
            <ul>
                <li>1k Lorem, ipsum dolor.</li>
                <li>500g Lorem ipsum dolor sit.</li>
                <li>12g Lorem ipsum dolor sit amet.</li>
                <li>3 Lorem ipsum dolor sit.</li>
                <li>1 Lorem ipsum dolor sit.</li>
            </ul>
        </section>

        <section class="Crafting">
            <h3>Elaboración</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam ab placeat doloremque, eos repudiandae voluptatibus nihil veritatis minus quas accusantium voluptas numquam a est perspiciatis quam dolore. Ex, consequatur omnis. Ea, temporibus. Facilis voluptatem nulla, recusandae adipisci quas repellat impedit.</p>
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