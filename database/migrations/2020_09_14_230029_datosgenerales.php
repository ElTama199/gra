<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Datosgenerales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosgenerales', function (Blueprint $table) {
            $table->id();
            $table->string('iduser')->unique();
            $table->string('nombre')->unique();
            $table->string('edad');
            $table->string('camisa');
            $table->string('calle');
            $table->string('colonia');
            $table->string('municipio');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('codigopostal');
            $table->string('telefono');
            $table->string('sexo');
            $table->string('calzado');
            $table->string('lnacimiento');
            $table->string('fnacimiento');
            $table->string('nacionalidad');
            $table->string('pantalon');
            $table->string('vivec');
            $table->string('estatura');
            $table->string('peso');
            $table->string('ecivil');
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
        //
    }
}
