<x-layout>
    
    <x-slot:title> Contact </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
    </x-slot>

    <div class="content">
        <h1>Welcome to the Contact</h1>
        <p>This is the content of the contact page.</p>
    </div>

</x-layout>