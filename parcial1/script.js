const mensaje=document.querySelector('#mensaje');
const botonMensaje=document.querySelector('#btn-confirmar');
let mostrar=false;
function mostrarMensaje(){
    mensaje.classList.toggle('mostrar');
    mostrar=!mostrar;
    if(mostrar){
        botonMensaje.textContent="Ocultar mensaje";
    }
    else{
        botonMensaje.textContent="Confirmar encargo";
    }   
}
botonMensaje.addEventListener('click', mostrarMensaje);