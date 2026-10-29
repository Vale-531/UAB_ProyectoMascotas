@extends('layouts.basetortas')
@section('contenido')


<h2>Nuestros productos</h2>

  <p>Hay <strong>{{ count($tortas) }}</strong> tortas registradas en la tienda.</p>

  <ul>
    @foreach ($tortas as $torta)
      <li>{{ $torta->sabor }} — Bs {{ $torta->precio }} stock:{{ $torta->stock }}</li>
    @endforeach
  </ul>

  <p><a href="/tortas/nuevo">+ Agregar una torta</a></p>


@endsection