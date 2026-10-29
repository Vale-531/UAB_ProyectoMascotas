<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table = 'mascotas';
    protected $fillable = ['refugio_id','nombre','especie', 'talla','genero','fecha_rescate','edad_mes_rescate','edad_anio_rescate','estado'];
}
