<x-layout>
    
    <x-slot:title> Shop </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/shop.css') }}">
    </x-slot>

    <div class="content">
        <h1>Welcome to the Shop</h1>
        <p>This is the content of the shop page.</p>
    </div>

</x-layout>