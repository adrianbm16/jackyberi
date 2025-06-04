<x-layout>
    
    <x-slot:title> Comprar </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/shop/create.css') }}">
    </x-slot>

    <div class="content">

        <div class="item">

            <div class="links">
                <a href="{{ route('shop.index') }}" class="back-link">Back to shop</a>
                <div class="admin" id="admin">
                    <button class="edit-image">Edit</button>
                    <button class="delete-image">Delete</button>
                </div>
            </div>

            <form action="{{ route('shop.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <div class="form-group">
                    <input type="text" placeholder="Name" name="name" id="name" class="form-inputs">
                    @error('name')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="number" placeholder="Price" name="price" id="price" class="form-inputs" step="0.01">
                    @error('price')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>

                <div class="form-group">
                    <textarea placeholder="description" name="description" id="description" class="form-inputs" rows="4"></textarea>
                    @error('description')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="file" name="image" id="image" class="form-inputs">
                    @error('image')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>

                <button type="submit" class="submit-btn">Save</button>
            </form>

        </div>

    </div>

</x-layout>
