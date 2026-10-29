@extends('layouts.base')
@section('contenido')

<section>
            <h2>Agregar nuevo rescate</h2>
            @if ($errors->any())
                <ul style="color: #b00020;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            @endif


            <form method="POST" action="/rescate/nuevo" novalidate>
            @csrf 
                <label for="nombre">Nombre de la mascota</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="especie">Especie </label>
                <label for="especie"><input type="radio" id="especie" name="especie" value="perro" checked>Perro</label>
                <label for="especie"><input type="radio" id="especie" name="especie" value="gato">Gato</label>
                
                <label for="talla">Talla en kilogramos</label>
                <input type="number" min=1 id="talla" name="talla" required>

                <label for="genero">Género: </label>
                <select name="genero" id="genero">
                    <option value="hembra">Hembra</option>
                    <option value="macho">Macho</option>
                </select>

                <label for="fecha_rescate">Fecha rescate</label>
                <input type="date" id="fecha_rescate" name="fecha_rescate" required>

                <label for="edad_anio_rescate">Años de la mascota</label>
                <input type="number" id="edad_anio_rescate" name="edad_anio_rescate" required min=0 value=0>
                <label for="edad_mes_rescate">Meses de la mascota</label>
                <input type="number" id="edad_mes_rescate" name="edad_mes_rescate" required min=1 value=0>


                <label for="estado"> Estado</label>
                <select name="estado" id="estado">
                    <option value="adopcion">En adopción</option>
                    <option value="observacion">En observacion</option>
                </select>

                <button type="submit">Registrar mascota</button>  
            </form>


        </section>


@endsection