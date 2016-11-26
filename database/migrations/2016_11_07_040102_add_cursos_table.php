<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre_curso');  
            $table->Integer('id_clase')->unsigned();
            $table->Integer('id_docente')->unsigned(); 

            $table->foreign('id_salon')->references('id')->on('salones');
            $table->foreign('id_docente')->references('id')->on('docentes');

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
        Schema::drop('cursos');
    }
}
