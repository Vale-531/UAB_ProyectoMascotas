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



const formularioAdoptante=document.querySelector('#form-adoptante');
const avisoContacto=document.querySelector('#aviso-contacto');

function revisarContacto(event){
    event.preventDefault();
    const nombre = document.querySelector('#nombre').value;
    const correo= document.querySelector('#correo').value;
    if(nombre===""){
        avisoContacto.textContent="Falta anotar su nombre.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    }else if(correo.includes("@")===false){
        avisoContacto.textContent="Correo incorrecto, debe llevar @.";
        avisoContacto.classList.add("error");
        avisoContacto.classList.remove("exito");
    } else{
        avisoContacto.textContent="Registro exitoso. Se le mandará un mensaje al correo registrado. Gracias";
        avisoContacto.classList.add("exito");
        avisoContacto.classList.remove("error");
    }

}
formularioAdoptante.addEventListener("submit",revisarContacto);