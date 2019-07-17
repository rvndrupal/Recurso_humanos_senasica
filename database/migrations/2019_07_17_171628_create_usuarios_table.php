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
            $table->string('foto',300);
            $table->string('rfc',30);
            $table->string('curp',30);
            $table->string('correo_inst',50);
            $table->string('correo_per',50);
            $table->string('tel_casa',15);
            $table->string('tel_cel',15);
            $table->string('calle',15);
            $table->string('numero',15);


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
