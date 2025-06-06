<x-layout>

    <x-slot:title> Gracias por su compra </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">

        <style>
            .congrats {
                font-family: var(--text-font);
                font-size: 1.3rem;
            }

            .return {
                margin-top: 2rem;
                font-family: var(--text-font);
                font-size: 1.1rem;
                text-decoration: none;
                color: #7e7e7e;
            }

            .return:hover {
                color: #a200ff;
                transition: color 0.5s ease-in-out;
            }
        </style>
    </x-slot>

    <div class="content">
        <h1>¡Thank you for your purchase!</h1>
        <p class="congrats">Your order has been successfully processed.</p>
        <p class="congrats">We will contact you in a few days.</p>
        <a href="{{ route('shop.index') }}" class="return">Return to the shop</a>
    </div>

</x-layout>
