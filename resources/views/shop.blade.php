<x-layout>
    
    <x-slot:title> Shop </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/shop.css') }}">
    </x-slot>

    <div class="content">

        <!-- Titulo de la tienda y botones de edicion-->
        <div class="title">
            <h1>Shop</h1>
            <div class="admin" id="admin">
                <button class="edit-image">Edit items</button>
                <button class="add-image">Add item</button>
            </div>
        </div>

        <!-- Modal para abrir cada item-->
        <div id="itemModal" class="modal">
            <span class="close">&times;</span>
            <div class="modal-background">
                <img class="modal-content" id="modalImg">
                <div id="text">
                    <h2 id="modalName"></h2>
                    <p id="modalDescription"></p>
                    <p id="modalPrice"></p>
                    <button class="buy-button">Buy</button>
                </div>
            </div>
        </div>

        <!-- Articulos de la tienda -->
        <div class="items">
            @foreach ($items as $item)
                <x-shop-item
                    :name="$item->name" 
                    :price="$item->price" 
                    :description="$item->description" 
                    :image="$item->image" 
                />
            @endforeach
        </div>

    </div>


    <script>
        // Obtener elementos del modal
        const modal = document.getElementById("itemModal");
        const modalImg = document.getElementById("modalImg");
        const modalName = document.getElementById("modalName");
        const modalPrice = document.getElementById("modalPrice");
        const modalDescription = document.getElementById("modalDescription");
        const closeBtn = document.querySelector(".close");
    
        // Agregar evento a cada artículo
        document.querySelectorAll(".shop-item").forEach(item => {
            item.addEventListener("click", function () {
                modal.style.display = "block"; // Mostrar el modal
                modalImg.src = this.querySelector("img").src; // Establecer la imagen
                modalName.textContent = this.dataset.name; // Establecer el nombre
                modalPrice.textContent = this.dataset.price; // Establecer el precio
                modalDescription.textContent = this.dataset.description; // Establecer la descripción
            });
        });
    
        // Cerrar el modal al hacer clic en el botón de cerrar
        closeBtn.onclick = function () {
            modal.style.display = "none";
        };
    
        // Cerrar el modal al hacer clic fuera del contenido
        modal.onclick = function (e) {
            if (e.target === modal) {
                modal.style.display = "none";
            }
        };
    </script>

</x-layout>