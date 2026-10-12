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