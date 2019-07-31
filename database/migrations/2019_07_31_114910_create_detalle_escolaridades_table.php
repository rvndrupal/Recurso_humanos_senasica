<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleEscolaridadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_escolaridades', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('usuarios_id');
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->unsignedBigInteger('grados_id');
            $table->foreign('grados_id')->references('id')->on('grados');
            $table->unsignedBigInteger('carreras_id');
            $table->foreign('carreras_id')->references('id')->on('carreras');
            $table->string('cedula',150)->default('0');
            $table->unsignedBigInteger('escuelas_id');
            $table->foreign('escuelas_id')->references('id')->on('escuelas');
            $table->unsignedBigInteger('titulos_id');
            $table->foreign('titulos_id')->references('id')->on('titulos');
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
        Schema::dropIfExists('detalle_escolaridades');
    }
}
