@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <section class="Login_Section" >
        <h2>Iniciar Sesión</h2>
        <form class="login_form" action="/LoginPage" method="POST"> 
            @csrf

            @if(session('message'))
                <small class="error-msg"> {{ session('message') }} </small>
            @endif

            <label for="email">Email:</label>
            <input placeholder="Ingrese su Correo Electrónico" type="email" name="email" id="email">
            @error('email') <small class="error-msg">{{ $message }}</small> @enderror
            <label for="password">Contraseña:</label>
            <input placeholder="Ingrese su Contraseña" type="password" name="password" id="password">
            @error('password') <small class="error-msg">{{ $message }}</small> @enderror
            <button class="submit" type="submit">Iniciar Sesión</button>
        </form>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection