<x-layout>

    <x-slot:title> Gracias por su compra </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
    </x-slot>

    <div class="content">
        <h1>¡Gracias por tu compra!</h1>
        <p>Tu pedido ha sido procesado exitosamente.</p>
        <a href="{{ route('shop.index') }}" class="btn btn-primary">Volver a la tienda</a>
    </div>

</x-layout>
