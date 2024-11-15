document.addEventListener("DOMContentLoaded",()=>{
// variables de los elementos del DOM
const botNav = document.querySelector(".nav div.menu :first-child");
const moverNav = document.querySelector("div.navbar");
const equis = document.querySelector(".navbar button");
const bod = document.querySelector("body");

//quitar el menu al dar click
equis.addEventListener("click", (evt)=>{
    moverNav.style.left = "100%";
});

//quitar menu al salir con el mouse

moverNav.addEventListener("mouseleave", (evt)=>{
    moverNav.style.left = "100%";
});

//entrar el menu
botNav.addEventListener("click", (evt)=>{
    if (bod.offsetWidth <= 672 ) {
        moverNav.style.left = "0px";
    } else {
        moverNav.style.left = "80%";   
    }
    
});
});