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
        Schema::create('policies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('familia');
            $table->foreign('familia')->references('id')->on('categories')->onDelete('cascade');
            $table->unsignedBigInteger('subfamilia');
            $table->foreign('subfamilia')->references('id')->on('categories')->onDelete('cascade');
            $table->decimal('p1',8,2);
            $table->decimal('p2',8,2);
            $table->decimal('p3',8,2);
            $table->decimal('p4',8,2);
            $table->decimal('p5',8,2);
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
        Schema::dropIfExists('policies');
    }
};
