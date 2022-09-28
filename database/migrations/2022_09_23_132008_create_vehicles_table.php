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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('placa');
            $table->text('serie');
            $table->text('marca');
            $table->text('linea');
            $table->integer('modelo');
            $table->string('color');
            $table->longText('motor');
            $table->longText('tarjeta_circulacion');
            $table->string('seguro');
            $table->string('poliza');
            $table->date('vigencia');
            $table->longText('image');
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
        Schema::dropIfExists('vehicles');
    }
};
