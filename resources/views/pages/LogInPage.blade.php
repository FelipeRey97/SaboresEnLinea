@extends('layouts.app')

@section('title', 'Iniciar Sesión')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <section class="Login_Section" >
        <h2>Iniciar Sesión</h2>
        <form class="login_form" action="#" method="post"> 
            <label for="email">Email:</label>
            <input placeholder="Ingrese su Correo Electrónico" type="email" name="email" id="email">

            <label for="password">Contraseña:</label>
            <input placeholder="Ingrese su Contraseña" type="password" name="password" id="password">

            <button class="submit" type="submit">Iniciar Sesión</button>
        </form>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection