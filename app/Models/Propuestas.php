<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propuestas extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'categoria', 'descripcion'];


    // Relacion una a muchos (inversa)

    public function instituto() {

        return $this->belongsTo('App\Models\Instituto');

    }

}
