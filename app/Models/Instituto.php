<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituto extends Model
{
    use HasFactory;
    
    // En fillable tenemos que poner los campos que queremos que se guarden
    protected $fillable = ['nombre', 'municipio', 'direccion', 'correo', 'telefono'];
    
    // En guarded tenemos que poner los campos que ¡NO! queremos que se guarden
    /* protected $guarded = ['status']; */

    // Relacion uno a muchos

    public function propuestas() {

        return $this->hasMany('App\Models\Propuestas');

    }

}
