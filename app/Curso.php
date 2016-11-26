<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = "Cursos";

    protected $fillable = ['nombre_curso', ' id_clase', 'id_docente'];


    public function estudiante()
    {
        //hasmany - tiene muchas
        return $this->hasmany(Estudiante::class);
    }
}
