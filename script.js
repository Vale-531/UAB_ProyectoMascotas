const boton=document.querySelector("#btn-tema");
let modonoche=true;
function cambiarmodo (){
    document.body.classList.toggle("oscuro");
}
boton.addEventListener('click', cambiarmodo);