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
        Schema::create('potion_ingredients', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ingredient_id')->references('id')->on('ingredients');
            $table->foreignId('potion_id')->references('id')->on('potions');
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
        Schema::dropIfExists('potion_ingredients');
    }
};
