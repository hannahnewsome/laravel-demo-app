<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitanicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('titanic', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('survived')->nullable();
          $table->string('pclass')->nullable();
          $table->string('name_last')->nullable();
          $table->string('name_first')->nullable();
          $table->string('sex')->nullable();
          $table->integer('age')->nullable();
          $table->integer('sibsp')->nullable();
          $table->integer('parch')->nullable();
          $table->string('ticket')->nullable();
          $table->integer('fare')->nullable();
          $table->string('cabin')->nullable();
          $table->string('embarked')->nullable();
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
        Schema::dropIfExists('titanic');
    }
}
