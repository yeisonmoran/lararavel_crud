<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;

    protected $table = 'paquetes';

    protected $fillable = ['destino','precio','cupos','duracion','descripcion'];
}
