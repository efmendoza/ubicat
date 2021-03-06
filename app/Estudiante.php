<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
      //protected $table = "Estudiantes";

      protected $fillable = ['nombre', 'apellido', 'correo'];


    public function estudiante()
    {
        //hasmany - tiene muchas
        return $this->belongsToMany(Curso::class);
    }
}
