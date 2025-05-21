<x-layout>
    
    <x-slot:title> Home </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
    </x-slot>

    <div class="content">

        <!-- Header -->
        <div class="hero">
            <h1 class="title">Jackyberi</h1>
        </div>

        <!-- Main content -->
        <div class="about">

            <!-- Contenido principal -->
            <div class="about-container">
                <img src="{{ asset('images/retrato.jpg') }}" alt="Logo">
                <div class="about-text">
                    <h2>Jacky Bernal</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod nulla eius placeat vel molestias odio, eos atque blanditiis neque modi ipsum libero inventore dolores consectetur adipisicing elit.</p>
                </div>
            </div>

        </div>
        
    </div>

</x-layout>

