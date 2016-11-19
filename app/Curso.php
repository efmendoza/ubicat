<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = "Cursos";

    protected $fillable = ['nombre_curso', ' id_salon', 'id_docente'];
}
