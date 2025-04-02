@extends('layouts.app')

@section('title', 'Registrarse')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <section class="Register_Section">
        <h2>Registrarse</h2>

        <form class="register_form" action="#" method="post">

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" placeholder="Apellido">

            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" placeholder="Correo Electrónico">

            <label for="clave">Contraseña:</label>
            <input type="password" name="clave" id="clave" placeholder="Contraseña">

            <label for="conf_clave">Confirmar Contraseña:</label>
            <input type="password" name="conf_clave" id="conf_clave" placeholder="Confirmar Contraseña">

            <button type="submit" >Registrarse</button>
        </form>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection