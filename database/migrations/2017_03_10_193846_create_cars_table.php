<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('brand');
            $table->string('model');
            $table->string('engine');
            $table->string('price');
            $table->timestamps();
        });

        Schema::create('car_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('car_id')->unsigned();
            $table->string('model');
            $table->string('engine');
            $table->string('price');
            $table->string('locale')->index();

            $table->unique(['car_id','locale']);
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
