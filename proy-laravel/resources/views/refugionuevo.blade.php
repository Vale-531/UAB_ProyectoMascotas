@extends('layouts.base')
@section('contenido')

<section>
            <h2>Agregar nuevo refugio</h2>
            @if ($errors->any())
                <ul style="color: #b00020;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            @endif


            <form method="POST" action="/refugio/nuevo" novalidate>
            @csrf 
                <label for="nombre">Nombre del refugio</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="direccion">Dirección del refugio</label>
                <input type="text" id="direccion" name="direccion" required>

                <label for="tipo">Tipo </label>
                <label for="tipo"><input type="radio" id="tipo" name="tipo" value="refugio" checked>Refugio</label>
                <label for="tipo"><input type="radio" id="tipo" name="tipo" value="hogar temporal">Hogar temporal</label>

                <button type="submit">Registrar mascota</button>  
            </form>


        </section>


@endsection