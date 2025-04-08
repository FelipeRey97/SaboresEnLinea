@extends('layouts.app')

@section('title', 'Home')

@section('header')
    @include('components.header')
@endsection

@section('content')


<div class="Banner_Image"></div>

<section class="Related_Recipes">
    <h2>Postres</h2>
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

    <article class="Recipe_Card" >
        <div class="Recipe_Card_Image">
            <img src="{{ asset('images/articles/pexels-suzyhazelwood-1098592.jpg') }}" alt="">
        </div>
        <h3>Title</h3>
        <p>Autor</p>
    </article>
</section>

<section class="Related_Recipes">
    <h2>Principales</h2>

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

    <article class="Recipe_Card" >
        <div class="Recipe_Card_Image">
            <img src="{{ asset('images/articles/pexels-catscoming-406152.jpg') }}" alt="">
        </div>
        <h3>Title</h3>
        <p>Autor</p>
    </article>
</section>

<section class="Category">
    <h2>Recetas Caseras</h2>
    <div class="Category_Image">
    </div>
</section>


<section class="Related_Recipes">
    <h2>Postres</h2>
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

    <article class="Recipe_Card" >
        <div class="Recipe_Card_Image">
            <img src="{{ asset('images/articles/pexels-suzyhazelwood-1098592.jpg') }}" alt="">
        </div>
        <h3>Title</h3>
        <p>Autor</p>
    </article>
</section>

<section class="Related_Recipes">
    <h2>Principales</h2>

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

    <article class="Recipe_Card" >
        <div class="Recipe_Card_Image">
            <img src="{{ asset('images/articles/pexels-catscoming-406152.jpg') }}" alt="">
        </div>
        <h3>Title</h3>
        <p>Autor</p>
    </article>
</section>


@endsection

@section('footer')
    @include('components.footer')
@endsection