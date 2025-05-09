
// ------------------------------ ALL ------------------------------

const nav = document.querySelector("#nav");
const abrir = document.querySelector("#abrir");
const cerrar = document.querySelector("#cerrar");

abrir.addEventListener("click", () => {
    nav.classList.add("visible");
})

cerrar.addEventListener("click", () => {
    nav.classList.remove("visible");
})


// ------------------------------ HOME ------------------------------

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