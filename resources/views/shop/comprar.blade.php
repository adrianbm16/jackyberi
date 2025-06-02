<x-layout>
    
    <x-slot:title> Comprar </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/shop-comprar.css') }}">
    </x-slot>

    <div class="content">

        <div class="item">

            <div class="links">
                <a href="{{ route('shop.index') }}" class="back-link">Back to shop</a>
                <div class="admin" id="admin">
                    <button class="edit-image">Edit</button>
                    <button class="delete-image">Delete</button>
                </div>
            </div>

            <div class="item-details">
                {{-- <img src="{{ asset($item->image) }}" alt="{{ $item->name }}"> --}}
                <img src="{{ asset('images/home/hero.jpg') }}" alt="{{ $item->name }}">
                <div class="item-info">
                    <h2>{{ $item->name }}</h2>
                    <p>{{ $item->description }}</p>
                    <div class="price-buy">
                        <p class="price">{{ $item->price }} €</p>
                        <form action="{{ route('shop.comprar', $item) }}" method="POST">
                            @csrf
                            <button type="submit" class="buy-button">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

</x-layout>
