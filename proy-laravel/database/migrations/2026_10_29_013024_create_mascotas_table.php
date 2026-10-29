<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('refugio_id')->constrained('refugios');

            $table->string('nombre');
            $table->string('especie');
            $table->double('talla');
            $table->string('genero');
            $table->date('fecha_rescate');
            $table->integer('edad_mes_rescate');
            $table->integer('edad_anio_rescate');  
            $table->string('estado');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
