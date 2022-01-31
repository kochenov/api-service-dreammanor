<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVegetableCalculatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vegetable_calculates', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // название грядки
            $table->foreignId('vegetable_id')->constrained();
            //$table->foreignId('user_id')->constrained();
            $table->integer('bushes'); // Количество кустов
            $table->integer('rows'); // Количество рядов
            $table->tinyInteger('exp'); // Состояние блока( открыт / закрыт)
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
        Schema::dropIfExists('vegetable_calculates');
    }
}
