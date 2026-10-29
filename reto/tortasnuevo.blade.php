@extends('layouts.basetortas')
@section('contenido')

<section>
            <h2>Agregar una torta</h2>
            @if ($errors->any())
                <ul style="color: #b00020;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            @endif

            <form method="POST" action="/tortas/nuevo" novalidate>
            @csrf 
                <label for="sabor">Sabor de la torta</label>
                <input type="text" id="sabor" name="sabor" required>

                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio"  required>

                <label for="stock">Stock</label>
                <input type="number" id="stock" name="stock"  required>

               
                <button type="submit">Registrar torta</button>  
            </form>

            
        </section>


@endsection