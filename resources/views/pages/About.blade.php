@extends('layouts.app')

@section('title', 'Nosotros')

@section('header')
    @include('components.header')
@endsection

@section('content')
    <section class="About_Section" >
        <h2>Nosotros</h2>
        <div class="about_info">
        <p>Body text for your whole article or post. We’ll put in some lorem ipsum to show how a filled-out page might look:

Excepteur efficient emerging, minim veniam anim aute carefully curated Ginza conversation exquisite perfect nostrud nisi intricate Content. Qui  international first-class nulla ut. Punctual adipisicing, essential lovely queen tempor eiusmod irure. Exclusive izakaya charming Scandinavian impeccable aute quality of life soft power pariatur Melbourne occaecat discerning. Qui wardrobe aliquip, et Porter destination Toto remarkable officia Helsinki excepteur Basset hound. Zürich sleepy perfect consectetur.  </p>
        <img src="{{ asset('images/recibeImage.webp') }}" alt="Recipe Image" width="300" height="400">
        </div>

        <h3>Contacto</h3>
        
            <form class="contact_form" action="#" method="post"> 
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" placeholder="Apellido">

            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" id="email" placeholder="Correo Electrónico">

            <label for="message">Mensaje:</label>
            <textarea name="message" id="message" placeholder="Ingrese su Mensaje"></textarea>

                <button class="submit" type="submit">Enviar</button>
            </form>
    </section>
@endsection

@section('footer')
    @include('components.footer')
@endsection