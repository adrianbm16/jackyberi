<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title ?? 'jackyberi' }} </title> <!-- Titulo de la pagina -->
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo/logo.png') }}"> <!-- Icono de la pestaña -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> <!-- Iconos de bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"> <!-- Estilos generales de la pagina -->
    {{ $styles ?? '' }} <!-- Estilos de la pagina aparte -->
</head>

<body>
    <!-- Header -->
    <header>
        <a href="/"><img class="logo" src="{{ asset('images/logo/logo.png') }}" alt="Logo"></a> <!-- Logo de la pagina -->

        <button class="abrir-menu" id="abrir"><i class="bi bi-list"></i></button> <!-- Boton para abrir el menu modo responsive -->

        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>

            <ul class="nav-list"> <!-- Lista de los enlaces de la pagina -->
                <li><a href="/">Home</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    {{ $slot }} <!-- Contenido de la pagina -->

    <!-- Footer -->
    <footer>
        <p class="copyright">&copy; {{ date('Y') }} jackyberi. All rights reserved.</p> <!-- Derechos de autor con la fecha actual-->

        <div class="mention"> <!-- Mencion a freepik -->
            <p>With the help of</p>
            <a href="https://freepik.es" target="_blank">
                <img src="{{ asset('images/logo/freepik.png') }}" alt="Freepik Logo">
            </a>
        </div>

        <div class="social-icons"> <!-- Iconos de las redes sociales -->
            <a href="https://www.instagram.com/jacky.beri/" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="{{ route('login') }}" id="login"><i class="bi bi-person-circle"></i></a>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script> <!-- Script de la pagina -->

</body>

</html>
