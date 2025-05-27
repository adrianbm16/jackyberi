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


/**
 * Este codigo activa y desactiva el menu de navegacion cuando el navegador es pequeño.
 * @param admin - E
 * @param login - El boton para abrir el menu de navegacion.
 */
const admin = document.querySelectorAll("#admin");
const login = document.querySelector("#login");

login.addEventListener("click", () => {

    admin.forEach(element => {
        if (element.classList.contains("visible")) {
            element.classList.remove("visible");
        } else {
            element.classList.add("visible");
        }
    });
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



