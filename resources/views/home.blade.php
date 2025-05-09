<x-layout>
    
    <x-slot:title> Home </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    </x-slot>

    <div class="content">
        <div class="hero">
            <h1 class="title">Jackyberi</h1>
        </div>
        <div class="about">
            <h2>About Us</h2>
            <img src="{{ asset('images/retrato.jpg') }}" alt="Logo">
            <p>Welcome to our website! We are dedicated to providing the best service possible.</p>
        </div>
    </div>

</x-layout>

