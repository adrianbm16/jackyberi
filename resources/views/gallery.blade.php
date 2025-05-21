<x-layout>
    
    <x-slot:title> Gallery </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/gallery.css') }}">
    </x-slot>

    <div class="content">
        <h1>Welcome to the Gallery</h1>

        <!-- Modal para abrir cada imagen-->
        <div id="imageModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="modalImg">
            <div id="caption"></div>
        </div>

        <!-- Galeria de imagenes -->
        <div class="row">
            <div class="column">
                <img class="gallery-img" src="{{ asset('images/gallery/img1.jpg') }}" alt="Image 1">
                <img class="gallery-img" src="{{ asset('images/gallery/img2.jpg') }}" alt="Image 2">
                <img class="gallery-img" src="{{ asset('images/gallery/img6.jpg') }}" alt="Image 3">
            </div>
            <div class="column">
                <img class="gallery-img" src="{{ asset('images/gallery/img4.jpg') }}" alt="Image 4">
                <img class="gallery-img" src="{{ asset('images/gallery/img5.jpg') }}" alt="Image 5">
                <img class="gallery-img" src="{{ asset('images/gallery/img3.jpg') }}" alt="Image 3">
                <img class="gallery-img" src="{{ asset('images/gallery/img10.jpg') }}" alt="Image 10">
            </div> 
            <div class="column">
                <img class="gallery-img" src="{{ asset('images/gallery/img7.jpg') }}" alt="Montaña">
                <img class="gallery-img" src="{{ asset('images/gallery/img8.jpg') }}" alt="Image 8">
                <img class="gallery-img" src="{{ asset('images/gallery/img9.jpg') }}" alt="Image 9">
            </div>
            <div class="column">
                <img class="gallery-img" src="{{ asset('images/gallery/img1.jpg') }}" alt="Image 1">
                <img class="gallery-img" src="{{ asset('images/gallery/img2.jpg') }}" alt="Image 2">
                <img class="gallery-img" src="{{ asset('images/gallery/img6.jpg') }}" alt="Image 6">
            </div>
        </div>

    </div>

</x-layout>