// -------------------------------------------- ALL --------------------------------------------
/**
 * Este codigo activa y desactiva el menu de navegacion cuando el navegador es pequeño.
 * @param nav - El menu de navegacion.
 * @param abrir - El boton para abrir el menu de navegacion.
 * @param cerrar - El boton para cerrar el menu de navegacion.
 */

const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");

abrir.addEventListener("click", () => {
    nav.classList.add("visible");
})

cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
})


// -------------------------------------------- HOME --------------------------------------------
/**
 * Este codigo al bajar la pagina hace aparecer el navegador en la pagina de inicio.
 * @param header - El header de la pagina.
 * @param title - El titulo de la pagina.
 */

document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector("header");
    const title = document.querySelector(".title");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 10) { 
            header.classList.add("scrolled");
            title.classList.add("scrolled");
        } else {
            header.classList.remove("scrolled");
            title.classList.remove("scrolled");
        }
    });
});

// -------------------------------------------- GALLERY --------------------------------------------
/**
 * Este codigo permite abrir un modal al hacer clic en una imagen de la galeria.
 * El modal muestra la imagen ampliada y un caption con el texto alternativo de la imagen.
 * Al hacer clic en el boton de cerrar o fuera de la imagen, el modal se cierra.
 * @param modal - El modal de la galeria.
 * @param modalImg - La imagen del modal.
 * @param captionText - El texto del caption.
 * @param closeBtn - El boton de cerrar el modal.
 */

// Obtener elementos del modal
const modal = document.getElementById("imageModal");
const modalImg = document.getElementById("modalImg");
const captionText = document.getElementById("caption");
const closeBtn = document.querySelector(".close");

// Agregar evento a cada imagen
document.querySelectorAll(".gallery-img").forEach(img => {
    img.addEventListener("click", function () {
        modal.style.display = "block"; // Mostrar el modal
        modalImg.src = this.src; // Establecer la imagen en el modal
        captionText.innerHTML = this.alt; // Establecer el texto del caption
    });
});

// Cerrar el modal al hacer clic en el botón de cerrar
closeBtn.onclick = function () {
    modal.style.display = "none";
};

// Cerrar el modal al hacer clic fuera de la imagen
modal.onclick = function (e) {
    if (e.target === modal) {
        modal.style.display = "none";
    }
};