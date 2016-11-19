<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEstudianteCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('id_curso')->unsigned();
            $table->Integer('id_estudiante')->unsigned(); 

             $table->foreign('id_curso')->references('id')->on('cursos');
             $table->foreign('id_estudiante')->references('id')->on('estudiantes');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('estudiante_cursos');
    }
}
