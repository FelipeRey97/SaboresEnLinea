<h1>Sabores en Línea</h1>
<button class="accordion">Menú</button>
<nav class="navbar" id="navigation">
    <ul>
        <li><a href="/">Inicio</a></li>
        <li><a href="/RecipeDetail">Recetas del día</a></li>
        <li><a href="/">Categorías</a></li>
        <li><a href="/About">Nosotros</a></li>
        @auth
        <li><a href="/NewRecipe">Publicar Receta </a></li>
        <li class="user_name"> Hola {{ auth()->user()->user_name }} </li>
        <form class="logout_form" action="/Logout" method="POST">
            @csrf
            <button type="submit">Cerrar Sesión</button>
        </form>
        @endauth
        @guest
        <li><a href="/LoginPage">Ingresar</a></li>
        <li><a href="/RegisterPage">Registrarse</a></li>
        @endguest
    </ul>
</nav>