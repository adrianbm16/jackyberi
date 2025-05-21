<x-layout>
    
    <x-slot:title> Shop </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/shop.css') }}">
    </x-slot>

    <div class="content">

        <div class="login">
            <ul class="login-list">
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
                <li class="profile"><img src="" alt=""></li>
            </ul>
        </div>

    </div>

</x-layout>