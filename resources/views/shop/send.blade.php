<x-layout>
    
    <x-slot:title> Comprar {{ $item->name }} </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/shop/send.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/shop/create.css') }}">
    </x-slot>

    <div class="content">

        <div class="item">

            <div class="links">
                <a href="{{ route('shop.index') }}" class="back-link">Back to shop</a>
            </div>

            <form action="{{ route('shop.buy', $item->id) }}" method="POST">

                @csrf

                <div class="form-group">
                    <p class="item-text">You are going to buy this:</p>
                    <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="item-image">
                </div>

                <div class="form-group">
                    <input type="text" placeholder="Name" name="name" id="name" class="form-inputs" value="{{ old('name') }}">
                    @error('name')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="number" placeholder="Phone number" name="phone" id="phone" class="form-inputs" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror

                    <input type="text" placeholder="Email" name="email" id="email" class="form-inputs" value="{{ old('email') }}">
                    @error('email')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>

                <div class="separator"></div> {{-- DATOS DE DIRECCION --}}

                <div class="form-group">
                    <input type="text" placeholder="Address" name="address" id="address" class="form-inputs" value="{{ old('address') }}">
                    @error('address')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="number" placeholder="Postal number" name="postal" id="postal" class="form-inputs" value="{{ old('postal') }}">
                    @error('postal')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror

                    <input type="text" placeholder="City" name="city" id="city" class="form-inputs" value="{{ old('city') }}">
                    @error('city')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>

                 <div class="separator"></div> {{-- DATOS BANCARIOS --}}

                <div class="form-group">
                    <input type="number" placeholder="Credit card number" name="card" id="card" class="form-inputs" value="{{ old('card') }}">
                    @error('card')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="number" placeholder="Postal number" name="postal" id="postal" class="form-inputs" value="{{ old('postal') }}">
                    @error('postal')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror

                    <input type="text" placeholder="City" name="city" id="city" class="form-inputs" value="{{ old('city') }}">
                    @error('city')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="text" placeholder="Address" name="address" id="address" class="form-inputs" value="{{ old('address') }}">
                    @error('address')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>




                <button type="submit" class="submit-btn">Buy</button>
            </form>

        </div>

    </div>
 
</x-layout>