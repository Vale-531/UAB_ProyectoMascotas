@extends('layouts.base')
@section('contenido')
    <div class="max-w-2xl mx-auto">
        <section>
            <h2>Dar hogar temporal a una mascota</h2>
            <p>
                Hay muchas manera de ayudar a las mascotas. Cuando ofreces un hogar temporal, le das el espacio a una mascota de vivir en un hogar, aprender y crecer, también ayudas a hacer lugar para otras mascotas en los refugios.
            </p>
            <p>
                El cuidado temporal ayuda a que las mascotas se acostumbren a la vida en un hogar, facilita el camino hacia la adopción y ayuda a prepararlos con éxito para sus hogares permanentes.
            </p>
            <h3>¿Qué significa dar hogar temporal?</h3>
            <p>Dar a una mascota un espacio seguro y amor</p>
            <h3>¿Qué gastos realizaré?</h3>
            <p>Todos los gastos veterinarios están cubiertos por la organización a la que ofreceras tu hogar, además del traslado a las veterinarias</p>
        </section>
        <section>
            <h3>Quiero dar hogar temporal</h3>
            <form action="">
                <label for="">Nombre:</label>
                <input type="text">
                <label for="">Apellido:</label>
                <input type="text">
                <label for="">Celular:</label>
                <input type="text">
                <br>Datos del perro que podría dar hogar temporal
                <label for="">Tamaño de perro:</label>
               <label for="">Especie: </label>
                <select name="" id="">
                    <option value="">Todos</option>
                    <option value="">Perro</option>
                    <option value="">Gato</option>
                </select>
                <label for="">Género: </label>
                <select name="" id="">
                    <option value="">Todos</option>
                    <option value="">Hembra</option>
                    <option value="">Macho</option>
                </select>
                <label for="">Talla: </label>
                <select name="" id="">
                    <option value="">Todos</option>
                    <option value="">Pequeño (4-10Kg)</option>
                    <option value="">Mediano (11-25Kg)</option>
                    <option value="">Grande (26-45Kg)</option>
                </select> 
                <button type="submit">Enviar solicitud</button>

            </form>
        </section>
        
    </div>
@endsection