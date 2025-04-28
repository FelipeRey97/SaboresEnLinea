@extends('layouts.app')

@section('title', 'Home')

@section('header')
    @include('components.header')
@endsection

@section('content')


<div class="Banner_Image"></div>


@foreach($categories->take(2) as $category)
    <section class="Related_Recipes">
        <h2> {{$category->recipCat_name}} </h2>

        @foreach($recipes->where('recip_categoriesId', $category->recipCat_id)->sortByDesc('created_at')->take(8) as $recipe)
        <article class="Recipe_Card">
                <a href="{{ route('recipes.show', $recipe->recip_id) }}">
                    <div class="Recipe_Card_Image">
                        <img src="{{ asset('uploads/' . $recipe->recip_Image) }}" alt="">
                    </div>
                </a>    
                <h3>
                    <a href="{{ route('recipes.show', $recipe->recip_id) }}">{{ $recipe->recip_name }}</a>
                </h3>
                <p>{{ $recipe->user->user_name ?? 'Sin autor' }} {{ $recipe->user->user_lastname ?? 'Sin autor' }}  </p>
            </article>
        @endforeach
    </section>
@endforeach

<section class="Category">
    <h2>Recetas Caseras</h2>
    <div class="Category_Image">
    </div>
</section>

@foreach($categories->skip(2)->take(2) as $category)
    <section class="Related_Recipes">
        <h2> {{$category->recipCat_name}} </h2>

        @foreach($recipes->where('recip_categoriesId', $category->recipCat_id)->sortByDesc('created_at')->take(8) as $recipe)
            <article class="Recipe_Card">
                <a href="{{ route('recipes.show', $recipe->recip_id) }}">
                    <div class="Recipe_Card_Image">
                        <img src="{{ asset('uploads/' . $recipe->recip_Image) }}" alt="">
                    </div>
                </a>    
                <h3>
                    <a href="{{ route('recipes.show', $recipe->recip_id) }}">{{ $recipe->recip_name }}</a>
                </h3>
                <p>{{ $recipe->user->user_name ?? 'Sin autor' }} {{ $recipe->user->user_lastname ?? 'Sin autor' }}  </p>
            </article>
        @endforeach
    </section>
@endforeach

@endsection

@section('footer')
    @include('components.footer')
@endsection