<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    public $timestamp = false;

    public function inventarios(){
        return $this->hasMany(Inventario::class);
    }
}
