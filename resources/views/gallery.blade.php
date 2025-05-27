<x-layout>

    <x-slot:title> Gallery </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/gallery.css') }}">
    </x-slot>

    <div class="content">

        <!-- Titulo de la galeria y botones de edicion-->
        <div class="title">
            <h1>Gallery</h1>
            <div class="admin" id="admin">
                <button class="add-image">Add image</button>
                <button class="edit-image">Edit images</button>
            </div>
        </div>

        <!-- Galeria de imagenes -->
        <div class="row">
            <div class="column">
                <!-- Imagenes de la base de datos de la columna 1 -->
                @foreach ($images as $imagen)
                    @if ($imagen->column == 1)
                        <img class="gallery-img" src="{{ asset($imagen->path) }}" alt="{{ $imagen->name }}">
                    @endif
                @endforeach
            </div>
            <div class="column">
                <!-- Imagenes de la base de datos de la columna 1 -->
                @foreach ($images as $imagen)
                    @if ($imagen->column == 2)
                        <img class="gallery-img" src="{{ asset($imagen->path) }}" alt="{{ $imagen->name }}">
                    @endif
                @endforeach
            </div>
            <div class="column">
                <!-- Imagenes de la base de datos de la columna 1 -->
                @foreach ($images as $imagen)
                    @if ($imagen->column == 3)
                        <img class="gallery-img" src="{{ asset($imagen->path) }}" alt="{{ $imagen->name }}">
                    @endif
                @endforeach
            </div>
            <div class="column">
                <!-- Imagenes de la base de datos de la columna 1 -->
                @foreach ($images as $imagen)
                    @if ($imagen->column == 4)
                        <img class="gallery-img" src="{{ asset($imagen->path) }}" alt="{{ $imagen->name }}">
                    @endif
                @endforeach
            </div>
        </div>

        <!-- Modal para abrir cada imagen-->
        <div id="imageModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-img" id="modalImg">
            <div id="caption"></div>
        </div>

        <!-- Modal con formulario de insercion de imagenes -->
        <div id="addImageModal" class="modal">
            <div class="modal-content">
                <span class="close" id="closeAddImageModal">&times;</span>
                <h2>Add Image</h2>
                <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="column" id="columnInput">
                    <div>
                        <label for="name">Image Name:</label>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div>
                        <label for="image">Image File:</label>
                        <input type="file" name="image" id="image" required>
                    </div>
                    <div>
                        <label for="column">Column:</label>
                        <select name="column" id="column" required>
                            <option value="1">Column 1</option>
                            <option value="2">Column 2</option>
                            <option value="3">Column 3</option>
                            <option value="4">Column 4</option>
                        </select>
                    </div>
                    <button type="submit">Add Image</button>
                </form>
            </div>
        </div>
        
    </div>

    <script>
        // Obtener elementos del modal
        const modal = document.getElementById("imageModal");
        const modalImg = document.getElementById("modalImg");
        const captionText = document.getElementById("caption");
        const closeBtn = document.querySelector(".close");

        // Agregar evento a cada imagen
        document.querySelectorAll(".gallery-img").forEach(img => {
            img.addEventListener("click", function() {
                modal.style.display = "block"; // Mostrar el modal
                modalImg.src = this.src; // Establecer la imagen en el modal
                captionText.innerHTML = this.alt; // Establecer el texto del caption
            });
        });

        // Cerrar el modal al hacer clic en el botón de cerrar
        closeBtn.onclick = function() {
            modal.style.display = "none";
        };

        // Cerrar el modal al hacer clic fuera de la imagen
        modal.onclick = function(e) {
            if (e.target === modal) {
                modal.style.display = "none";
            }
        };





        // Modal para añadir imágenes
        const addImageModal = document.getElementById("addImageModal");
        const closeAddImageModal = document.getElementById("closeAddImageModal");
        const columnInput = document.getElementById("columnInput");

        // Abrir el modal al hacer clic en un botón "Add image"
        document.querySelectorAll(".add-image").forEach(button => {
            button.addEventListener("click", function (e) {
                e.preventDefault();
                const column = this.getAttribute("data-column");
                columnInput.value = column; // Establecer el valor de la columna
                addImageModal.style.display = "block"; // Mostrar el modal
            });
        });

        // Cerrar el modal
        closeAddImageModal.addEventListener("click", () => {
            addImageModal.style.display = "none";
        });

        // Cerrar el modal al hacer clic fuera del contenido
        window.addEventListener("click", function (e) {
            if (e.target === addImageModal) {
                addImageModal.style.display = "none";
            }
        });
    </script>

</x-layout>
