<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('brewing_method')->nullable();
            $table->string('roast')->nullable();
            $table->string('grind')->nullable();
            $table->string('origin')->nullable();
            $table->string('producer')->nullable();
            $table->smallInteger('notes')->nullable();
            $table->smallInteger('body')->nullable();
            $table->smallInteger('aroma')->nullable();
            $table->smallInteger('acidity')->nullable();
            $table->smallInteger('bitterness')->nullable();
            $table->smallInteger('sweetness')->nullable();
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coffees');
    }
}
