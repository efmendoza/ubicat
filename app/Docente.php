<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
      protected $table = "Docentes";

      protected $fillable = ['nombre', 'apellido', 'correo'];
}
