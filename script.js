const cuerpo = document.querySelector("body");
const botonModo=document.querySelector("#btn-tema");
let modonoche=false;
function cambiarmodo (){
    cuerpo.classList.toggle("oscuro");
    modonoche=!modonoche;
    if (modonoche) {
        botonModo.textContent =  "☀️ Modo día";
    } else {
        botonModo.textContent = "🌙 Modo noche";
    }
}
botonModo.addEventListener('click', cambiarmodo);



const botonMenu=document.querySelector("#btn-menu");
const menu=document.querySelector("nav ul");
function cambiarmenu(){
    menu.classList.toggle("abierto");

}
botonMenu.addEventListener('click', cambiarmenu);