const formularioPedido=document.querySelector('#form-horno');
const avisoPedido=document.querySelector('#aviso-horno');

function revisarPedido(event){
    const nombre = document.querySelector('#nombre').value;
    const correo= document.querySelector('#correo').value;
    if(nombre===""){
        event.preventDefault();
        avisoPedido.textContent="Falta anotar su nombre.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    }else if(correo===""){
        event.preventDefault();
        avisoPedido.textContent="Por favor anote su correo.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    } else if(correo.includes("@")===false){
        event.preventDefault();
        avisoPedido.textContent="Correo incorrecto, debe llevar @.";
        avisoPedido.classList.add("error");
        avisoPedido.classList.remove("exito");
    } else{
        avisoPedido.textContent="Registro exitoso. Su pedido fue procesado correctamente. Valeria Lucía Gutiérrez Callejas Gracias";
        avisoPedido.classList.add("exito");
        avisoPedido.classList.remove("error");

    }

}
formularioPedido.addEventListener("submit",revisarPedido);