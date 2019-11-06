<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('psgcCode');
            $table->string('citymunDesc');
            $table->string('regDesc');
            $table->unsignedBigInteger('provCode');
            $table->string('citymunCode');
            $table->timestamps();
            $table->foreign('provCode')->references('provCode')->on('provinces');
            $table->index('psgcCode');
            $table->index('citymunDesc');
            $table->index('regDesc');
            $table->index('provCode');
            $table->index('citymunCode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
