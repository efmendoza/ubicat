<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante_Curso extends Model
{
     protected $table = "Estudiante_Cursos";

     protected $fillable = ['id_curso', 'id_estudiante'];
}
