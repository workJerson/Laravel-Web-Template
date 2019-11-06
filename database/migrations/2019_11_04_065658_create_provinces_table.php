<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('psgcCode');
            $table->string('provDesc');
            $table->unsignedBigInteger('regCode')->nullable();
            $table->unsignedBigInteger('provCode')->nullable();
            $table->timestamps();

            $table->foreign('regCode')->references('regCode')->on('regions');
            $table->index('psgcCode');
            $table->index('provDesc');
            $table->index('regCode');
            $table->index('provCode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
}
