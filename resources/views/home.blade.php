<x-layout>
    
    <x-slot:title> Home </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    </x-slot>

    <div class="content">
        <h1>Welcome to the Home Page</h1>
        <p>This is the content of the home page.</p>
    </div>

</x-layout>

