<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refaccion extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function inventarios()
    {
        return $this->belongsToMany(Inventario::class);
    }
}
