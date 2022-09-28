<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('last_name');
            $table->string('second_last_name');
            $table->string('rfc')->unique();
            $table->string('email')->unique();
            $table->bigInteger('number')->unique();
            $table->longText('address');
            $table->string('puesto');
            $table->string('degree');
            $table->string('posgrado')->nullable();
            $table->longText('cv');
            $table->longText('solicitud');
            $table->longText('certificado');
            $table->longText('medico');
            $table->longText('titulo');
            $table->longText('licencia');
            $table->longText('acta');
            $table->longText('comprobante');
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
        Schema::dropIfExists('prospects');
    }
};
