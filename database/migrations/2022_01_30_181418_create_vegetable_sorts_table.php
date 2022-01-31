<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVegetableSortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vegetable_sorts', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Название сорта
            $table->foreignId('vegetable_id')->constrained(); // К какому овощу относится
            $table->integer('distanceBetweenRows'); // Дистанция между рядов
            $table->integer('distanceBetweenBushes'); //  Дистанция между кустов
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
        Schema::dropIfExists('vegetable_sorts');
    }
}
