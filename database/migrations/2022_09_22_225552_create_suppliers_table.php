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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->string('email')->unique();
            $table->longText('fiscal_name');
            $table->string('rfc')->unique();
            $table->bigInteger('tel')->unique();
            $table->bigInteger('tel2')->nullable();
            $table->bigInteger('tel3')->nullable();
            $table->string('cfdi')->nullable();
            $table->longText('address');
            $table->string('number')->nullable();
            $table->string('cp');
            $table->string('suburb');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->longText('address2');
            $table->string('number2')->nullable();
            $table->string('cp2');
            $table->string('suburb2');
            $table->string('city2');
            $table->string('state2');
            $table->string('country2');
            $table->boolean('status')->default(TRUE);
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
        Schema::dropIfExists('suppliers');
    }
};
