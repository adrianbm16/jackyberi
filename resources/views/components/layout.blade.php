<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ $title ?? 'jackyberi' }} </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/gallery">Gallery</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/shop">Shop</a></li>
            </ul>
        </nav>
    </header>

    {{ $slot }}

</body>
</html>