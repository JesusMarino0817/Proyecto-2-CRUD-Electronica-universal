<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $table = "inventarios";
    protected $fillable = ['nombre','categoria_id','precio','precio_cliente','cantidad','descripcion'];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function refaccions(){
        return $this->belongsToMany(Refaccion::class);
    }



}
