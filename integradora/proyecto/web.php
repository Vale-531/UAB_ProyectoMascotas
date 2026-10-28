<?php

use Illuminate\Support\Facades\Route;

use App\Models\Torta;

Route::get('/', function () {
    return view('inicio');
});

Route::get('adoptar', function () {
    return view('adoptar');
});

Route::get('temporal', function () {
    return view('temporal');
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
    ], [
        'sabor.required' => 'Debe mencionar el sabor de la torta.',
        'precio.required' => 'El precio no puede quedar vacío.',
        'precio.integer' => 'El precio tiene que ser un número entero, no decimales.',
    ]);
      Torta::create([
        'sabor' => request()->input('sabor'),
        'precio' => request()->input('precio'),
    ]);
    return redirect('/tortas');
});

