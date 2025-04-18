@extends('layouts.app')

@section('title', 'Registrarse')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <section class="Register_Section">
        <h2>Registrarse</h2>

        <form class="register_form" action="/RegisterPage" method="POST">
            @csrf 
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="name" id="nombre" placeholder="Nombre" value="{{ old('name') }}">
                @error('name') <small class="error-msg">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="lastname" id="apellido" placeholder="Apellido" value="{{ old('lastname') }}">
                @error('lastname') <small class="error-msg">{{ $message }}</small> @enderror
            </div>

            <div class="form-group email">
                <label for="email">Correo Electrónico:</label>
                <input type="text" name="email" id="email" placeholder="Correo Electrónico" value="{{ old('email') }}">
                @error('email') <small class="error-msg">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label for="clave">Contraseña:</label>
                <input type="password" name="password" id="password" placeholder="Contraseña" value="{{ old('password') }}">
                @error('password') <small class="error-msg">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label for="conf_clave">Confirmar Contraseña:</label>
                <input type="password" name="password_confirmation" id="conf_clave" placeholder="Confirmar Contraseña" value="{{ old('password_confirmation') }}">
                @error('password_confirmation') <small class="error-msg">{{ $message }}</small> @enderror
            </div>
            <button type="submit" >Registrarse</button>
        </form>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection