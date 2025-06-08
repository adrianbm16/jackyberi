<x-layout>
    
    <x-slot:title> Comprar </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/shop/create.css') }}">
    </x-slot>

    <div class="content">

        <div class="item">

            <div class="links">
                <a href="{{ route('shop.index') }}" class="back-link">Back to shop</a>
                @auth
                    <div class="edit-buttons">
                        <form action="{{ route('shop.destroy', $item) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-image">Delete</button>
                        </form>
                    </div>
                @endauth
            </div>

            <form action="{{ route('shop.update', $item) }}" method="POST" enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <input type="text" placeholder="Name" name="name" id="name" class="form-inputs" value="{{ old('name', $item->name) }}">
                    @error('name')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="number" placeholder="Price" name="price" id="price" class="form-inputs" step="0.01" value="{{ old('name', $item->price) }}">
                    @error('price')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>

                <div class="form-group">
                    <textarea placeholder="description" name="description" id="description" class="form-inputs" rows="4"> {{ old('name', $item->description) }} </textarea>
                    @error('description')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image" class="image-text">Imagen actual:</label>
                    <div class="current-image">
                        <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="image-preview">
                    </div>
                    <label for="image" class="image-text">Cambiar imagen:</label>
                    <input type="file" name="image" id="image" class="form-inputs">
                    @error('image')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>

                <button type="submit" class="submit-btn">Update</button>
            </form>

        </div>

    </div>

</x-layout>
