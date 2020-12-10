<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventario extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "inventarios";
    protected $fillable = ['nombre','categoria_id','precio','precio_cliente','cantidad','descripcion'];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }

    public function refaccions(){
        return $this->belongsToMany(Refaccion::class);
    }

    public function getNombreAttribute($value)
    {
        return ucwords(strtolower($value));
    }

    public function setDescripcionAttribute($value)
    {
        $this->attributes['descripcion'] = strtoupper($value);
    }

    public function getDescripcionAttribute($value)
    {
        return ucwords(strtolower($value));
    }

    public function getGananciaPorProductoAttribute(){
        return $this->precio_cliente - $this->precio;

    }

}
