<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            //código, nombre, apellido, imagen
            $table->string('codigo',20);
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('imagen',200)->nullable();
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
        Schema::dropIfExists('datos_personas');
    }
}
