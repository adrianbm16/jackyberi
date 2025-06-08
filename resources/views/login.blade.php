<x-layout>

    <x-slot:title> Login </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
        <style>
            .logged {
                font-family: var(--text-font);
                font-size: 1.5rem;
                color: green;
            }
            .nologged {
                font-family: var(--text-font);
                font-size: 1.5rem;
                color: red;
            }
            .logout {
                font-family: var(--nav-font);
                font-size: 1rem;
                font-weight: bold;
                text-transform: uppercase;
                color: #474544;
                text-decoration: none;
            }
            .logout:hover {
                color: red;
            }
            .remember-container {
                display: flex;
                margin-top: 10px;
            }
            .remember-text {
                font-family: var(--nav-font);
                color: #474544;
                font-size: 1rem;
                margin-right: 10px;
            }
            .remember-check {
                width: 20px;
                height: 20px;
                ma
            }
        </style>
    </x-slot>

    <div class="content">
        <h1>Login</h1>

        @auth
            <p class="logged">You are now logged!</p>
        @else
            <p class="nologged">This page is for admin only!</p>
        @endauth

        <!-- Formulario de contacto -->
        <form action="{{ route('iniciar-sesion') }}" method="POST">
            @csrf

            <div class="input-container">
                <input type="email" placeholder="Email" name="email" id="email_input" value="{{ old('email') }}">
            </div>

            <div class="input-container">
                <input type="password" placeholder="Password" name="password" id="password_input">
                @error('message')
                    <div class="error"> <p>{{ $message }}</p> </div>
                @enderror
            </div>

            <div class="remember-container">
                <label class="remember-text" for="remember"> Remember me </label>
                <input class="remember-check" type="checkbox" name="remember" id="remember">
            </div>

            <div class="submit">
                <input type="submit" value="Login" id="form_button" />
            </div>
        </form>

        <a href="{{ route('logout') }}" class="logout">Logout</a> <!-- Enlace para cerrar sesion -->

    </div>

</x-layout>
