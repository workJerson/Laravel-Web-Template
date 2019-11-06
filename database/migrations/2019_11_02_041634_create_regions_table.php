<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('psgcCode', 100);
            $table->string('regDesc', 100);
            $table->unsignedBigInteger('regCode')->nullable();
            $table->timestamps();

            $table->index('psgcCode');
            $table->index('regDesc');
            $table->index('regCode');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
