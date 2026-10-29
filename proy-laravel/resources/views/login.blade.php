@extends('layouts.base')

@section('contenido')
<form action="/login" method="POST">
    @csrf
    <p>
      <label for="email">Correo:</label><br>
      <input type="email" id="email" name="email" required>
    </p>

    <p>
      <label for="password">Contraseña:</label><br>
      <input type="password" id="password" name="password" required>
    </p>

    <p><button type="submit">Entrar</button></p>
  </form>
@endsection
