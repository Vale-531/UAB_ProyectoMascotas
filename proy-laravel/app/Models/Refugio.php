<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refugio extends Model
{
    protected $table = 'refugios';
    protected $fillable = ['encargado_id','nombre', 'direccion','tipo','estado'];
}
