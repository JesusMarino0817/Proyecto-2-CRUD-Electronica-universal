<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprobante extends Model
{
    use HasFactory;

    protected $table = "comprobantes";
    protected $fillable = ['categoria', 'nombre_cliente', 'fecha_entrega', 'celular_cliente', 'descripcion', 'monto'];
}
