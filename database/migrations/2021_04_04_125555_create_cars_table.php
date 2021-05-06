<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->integer('min_price');
            $table->integer('max_price');
            $table->string('group');
            $table->integer('popularity');
            $table->integer('built_year');
            $table->integer('brand_id');
            $table->enum('body_type',['hatchback','mvp','suv','sedan']);
            $table->enum('fuel',['petroleum','diesel']);
            $table->integer('power');
            $table->string('segmen');
            $table->enum('transmission',['manual','automatic']);
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
        Schema::dropIfExists('cars');
    }
}
