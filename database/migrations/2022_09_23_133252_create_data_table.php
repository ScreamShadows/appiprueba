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
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->unsignedBigInteger('branch_id');
            $table->foreign('branch_id')->references('id')->on('branches')->onUpdate('cascade');
            $table->string('department');
            $table->string('post');
            $table->string('contract');
            $table->integer('time');
            $table->string('type_journy');
            $table->date('start');
            $table->string('antiguedadsat');
            $table->string('sindicalizado');
            $table->string('type_regimen');
            $table->string('riesgopuesto');
            $table->string('periocidadpago');
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
        Schema::dropIfExists('data');
    }
};
