<x-layout>
    
    <x-slot:title> Shop </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/shop/index.css') }}">
    </x-slot>

    <div class="content">

        <!-- Titulo de la tienda y botones de edicion-->
        <div class="title">
            <h1>Shop</h1>
            <div class="admin" id="admin">
                <a href="{{ route('shop.create') }}"><button class="add-image">Add item</button></a>
                
            </div>
        </div>

        <!-- Articulos de la tienda -->
        <div class="items">
            @foreach ($items as $item)
                <a href="{{ route('shop.show', $item) }}">
                    <div class="shop-item" >
                         <img src="{{ asset($item->image) }}" alt="{{ $item->name }}">
                        {{--<img src="{{ asset('images/home/hero.jpg') }}" alt="{{ $item->name }}"> --}}
                        <div class="item-text">
                            <h4>{{ $item->name }}</h4>
                            <p>{{ $item->price }} €</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>

</x-layout>