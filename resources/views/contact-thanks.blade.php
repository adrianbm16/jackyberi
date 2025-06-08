<x-layout>

    <x-slot:title> Contact </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
        <style>
            .text1 {
                text-align: center
            }
        </style>
    </x-slot>

    <div class="content">
        <h1>Email send!</h1>

        <p class="text1">Thank you for your message. We will get back to you as soon as possible.</p>
    </div>

</x-layout>
