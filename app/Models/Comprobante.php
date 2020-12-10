<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comprobante extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "comprobantes";
    protected $fillable = ['categoria', 'nombre_cliente', 'fecha_entrega', 'celular_cliente', 'descripcion', 'monto'];
}
