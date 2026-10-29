<?php

use Illuminate\Support\Facades\Route;

use App\Models\Torta;
use App\Models\Mascota;
use App\Models\Encargado;
use App\Models\Refugio;

Route::get('/', function () {
    
    $mascotas=Mascota::all();
    $refugios=Refugio::all();
    return view('inicio',['mascotas'=>$mascotas],['refugios'=>$refugios]);
});

Route::get('adoptar', function () {
    return view('adoptar');
});

Route::get('temporal', function () {
    return view('temporal');
});

Route::get('rescate/nuevo', function () {
    return view('rescatenuevo');
});

Route::post('rescate/nuevo', function () {
    request()->validate([
        'nombre' => 'required',
        'talla'=> 'required',
        'fecha_rescate'=> 'required',
        'edad_mes_rescate'=> 'required|integer',
        'edad_anio_rescate'=> 'required|integer',
    ], [
        'nombre.required' => 'Proporcione un nombre para la mascota rescatada',
        'talla.required' => 'Debe mencionar un peso estimado de la mascota.',
        'fecha_rescate.required' => 'Mencione la fecha en la que se realizó el rescate',
        'edad__mes_rescate.required' => 'Este campo no debe estar vacío',
        'edad__anio_rescate.required' => 'Este campo no debe estar vacío',
        'edad__mes_rescate.integer' => 'Debe ingresar números enteros',
        'edad__anio_rescate.integer' => 'Debe ingresar números enteros',
    ]);
      Mascota::create([
        'refugio_id' => 1,
        'nombre' => request()->input('nombre'),
        'especie' => request()->input('especie'),
        'talla' => request()->input('talla'),
        'genero' => request()->input('genero'),
        'fecha_rescate' => request()->input('fecha_rescate'),
        'edad_mes_rescate' => request()->input('edad_mes_rescate'),
        'edad_anio_rescate' => request()->input('edad_anio_rescate'),
        'estado' => request()->input('estado'),
    ]);
    return redirect('/');
});


Route::get('refugio/nuevo', function () {
    return view('refugionuevo');
});
Route::post('refugio/nuevo', function () {
    request()->validate([
        'nombre' => 'required',
        'direccion'=> 'required',
    ], [
        'nombre.required' => 'Proporciones el nombre del refugio u hogar temporal que desea agregar',
        'direccion.required' => 'Proporciones la dirección de su refugio u hogar temporal.',
    ]);
      Refugio::create([
        'encargado_id' => 1,
        'nombre' => request()->input('nombre'),
        'direccion' => request()->input('direccion'),
        'tipo' => request()->input('tipo'),
        'estado' => 1,
    ]);
    return redirect('/');
});






Route::get('/tortas', function () {
    $tortas= Torta::all();
    return view('tortas', ['tortas'=>$tortas]);
});

Route::get('/tortas/nuevo', function () {
    return view('tortasnuevo');
});

Route::post('/tortas/nuevo', function () {
    request()->validate([
        'sabor' => 'required',
        'precio' => 'required|integer',
        'stock' => 'required|integer',
    ], [
        'sabor.required' => 'Debe mencionar el sabor de la torta.',
        'precio.required' => 'El precio no puede quedar vacío.',
        'precio.integer' => 'El precio tiene que ser un número entero, no decimales.',
        'stock.required' => 'Debe registrar la cantidad de producto en existencia.',
        'stock.integer' => 'El stock debe ser un número entero.'
    ]);
      Torta::create([
        'sabor' => request()->input('sabor'),
        'precio' => request()->input('precio'),
        'stock' => request()->input('stock'),
    ]);
    return redirect('/tortas');
});




Route::get('/login', function () {
    return view('login');
});


