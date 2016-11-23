<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
     protected $table = "Sedes";

     protected $fillable = ['nombre_sede', 'latitud','longitud'];
}
