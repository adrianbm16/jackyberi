<x-layout>
    
    <x-slot:title> Shop </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/shop.css') }}">
    </x-slot>

    <div class="content">

        <div class="title">
            <h1>Shop</h1>
            <div class="admin" id="admin">
                <button class="edit-image">Edit images</button>
                <button class="add-image">Add image</button>
            </div>
        </div>

        <div class="items">
            <img class="shop-item" src="{{ asset('images/hero.jpg') }}" alt="">
            <img class="shop-item" src="{{ asset('images/hero.jpg') }}" alt="">
            <img class="shop-item" src="{{ asset('images/hero.jpg') }}" alt="">
            <img class="shop-item" src="{{ asset('images/hero.jpg') }}" alt="">
            <img class="shop-item" src="{{ asset('images/hero.jpg') }}" alt="">
            <img class="shop-item" src="{{ asset('images/hero.jpg') }}" alt="">
            <img class="shop-item" src="{{ asset('images/hero.jpg') }}" alt="">
            <img class="shop-item" src="{{ asset('images/hero.jpg') }}" alt="">
            <img class="shop-item" src="{{ asset('images/hero.jpg') }}" alt="">
            <img class="shop-item" src="{{ asset('images/hero.jpg') }}" alt="">
            <img class="shop-item" src="{{ asset('images/hero.jpg') }}" alt="">
            <img class="shop-item" src="{{ asset('images/hero.jpg') }}" alt="">
        </div>

    </div>

</x-layout>