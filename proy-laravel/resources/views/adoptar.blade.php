@extends('layouts.base')
@section('contenido')
    <div class="max-w-2xl mx-auto">
        <section>
            <h2>Encuentra tu mascota</h2>
            <p>Llena este formulario y te mandaremos una lista de mascotas más adecuadas para tí </p>
            <form id="form-adoptante" novalidate method="POST" action="procesar.php">
            @csrf 
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" placeholder="Nombre y apellido" required>

                <label for="correo">Correo</label>
                <input type="email" id="correo" name="correo" placeholder="nombre@ejemplo.com" required>

                <label for="">¿Que especie deseas?</label>
                <label for="perro"><input type="radio" id="perro" name="especie" value="perro" checked>Perro</label>
                <label for="gato"><input type="radio" id="gato" name="especie" value="gato">Gato</label>
                
                <label for="genero">Género: </label>
                <select name="genero" id="genero">
                    <option value="todos">Todos</option>
                    <option value="hembra">Hembra</option>
                    <option value="macho">Macho</option>
                </select>

                <label for="talla">Talla: </label>
                <select name="talla" id="talla">
                    <option value="todos">Todos</option>
                    <option value="pequeño">Pequeño (4-10Kg)</option>
                    <option value="mediano">Mediano (11-25Kg)</option>
                    <option value="grande">Grande (26-45Kg)</option>
                </select>

                <label for="cantidad">¿Cuántas mascotas estás dispuesto a adoptar?</label>
                <input type="number" id="cantidad" name="cantidad" min="1" max="3" value="1">

                <label for="extra">Información extra que deseas que se tome a consideración</label>
                <textarea id="extra" name="extra"  rows="4" placeholder="¿Que otros aspectos deberíamos considerar?"></textarea>

                <button type="submit">Enviar solicitud</button>
                <p id="aviso-contacto" class="aviso"></p>

            </form>
        </section>
        
    </div>
@endsection