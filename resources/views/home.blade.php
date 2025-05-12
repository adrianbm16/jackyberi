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
            <div class="about-container">
                <img src="{{ asset('images/retrato.jpg') }}" alt="Logo">
                <div class="about-text">
                    <h2>Jacky Bernal Rivero</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod nulla eius placeat vel molestias odio, eos atque blanditiis neque modi ipsum libero inventore dolores qui et? Dolor sint sequi voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum provident amet delectus minus eaque recusandae eum quidem ex praesentium sunt?</p>
                </div>
            </div>
        </div>
    </div>

</x-layout>

