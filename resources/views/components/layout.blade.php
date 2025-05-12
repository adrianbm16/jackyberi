<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title ?? 'jackyberi' }} </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/logo.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    {{ $styles ?? '' }}
</head>
<body>
    <header>
        <a href="/"><img class="logo" src="{{ asset('images/logo.png') }}" alt="Logo"></a>
        <button class="abrir-menu" id="abrir"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li><a href="/">Home</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        
    </header>

    {{ $slot }}

    <footer>
        <p class="copyright">&copy; {{ date('Y') }} jackyberi. All rights reserved.</p>

        <div class="mention">
            <p>With the help of</p>
            <a href="https://freepik.es" target="_blank">
                <img src="{{ asset('images/Freepik logo.png') }}" alt="Freepik Logo">
            </a>
        </div>

        <div class="social-icons">
            <a href="#" target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/jacky.beri/" target="_blank"><i class="bi bi-instagram"></i></a>
            <a href="#" target="_blank"><i class="bi bi-youtube"></i></a>
        </div>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>