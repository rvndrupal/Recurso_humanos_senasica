<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom',30);
            $table->string('ap',50);
            $table->string('am',50);
            $table->date('fecha_nacimiento');
            // $table->string('ife',100);

            $table->string('foto',300);
            $table->string('rfc',30);
            $table->string('curp',30);
            // $table->string('correo_inst',50);
            // $table->string('correo_per',50);
            // $table->string('tel_casa',15);
            // $table->string('tel_cel',15);
            $table->string('calle',200);
            $table->string('numero',50);
            // $table->string('estado',50);

            // $table->string('colonia',15);
            // $table->string('cp',15);



            $table->unsignedBigInteger('pais_id');
            $table->foreign('pais_id')->references('id')->on('pais');
            $table->unsignedBigInteger('estados_id');
            $table->foreign('estados_id')->references('id')->on('estados');
            $table->unsignedBigInteger('colonias_id');
            $table->foreign('colonias_id')->references('id')->on('colonias');
            $table->unsignedBigInteger('codigos_id');
            $table->foreign('codigos_id')->references('id')->on('codigos');







            $table->boolean('condicion')->default(1);
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
        Schema::dropIfExists('usuarios');
    }
}
