<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title ?? 'jackyberi' }} </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gallery.css') }}">
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
                <li><a href="/contact">Contact</a></li>
                <li><a href="/shop">Shop</a></li>
            </ul>
        </nav>
        
    </header>

    {{ $slot }}

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>