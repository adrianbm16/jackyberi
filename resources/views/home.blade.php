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
                <img src="{{ asset('images/home/retrato.jpg') }}" alt="Logo">
                <div class="about-text">
                    <h2>Jacky Bernal</h2>
                    <p>Jacky Bernal is a painter from Belgium. He studied art in Algeciras, Spain. His paintings are full of color and emotion. Jacky’s work is inspired by different cultures, nature, and everyday life. Each piece tells a unique story.</p>
                </div>
            </div>

            <!-- Contenido secundario -->
            <div class="slider-container">
                <h2 class="slider-title">Last creations</h2>
                <div class="slider">
                    <div class="slide-track">
                        
                        <!-- Slider de imagenes -->
                        @foreach ($images as $image)
                            <div class="slide">
                                <img src="{{ asset($image->path) }}" alt="{{ $image->name }}">
                            </div>
                        @endforeach
                        
                        <!-- Repetir las imagenes para el efecto de slider -->
                        @foreach ($images as $image)
                            <div class="slide">
                                <img src="{{ asset($image->path) }}" alt="{{ $image->name }}">
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>

    </div>

</x-layout>
