<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $table = "Salones";

    protected $fillable = ['numero_salon', 'id_sede'];
}
