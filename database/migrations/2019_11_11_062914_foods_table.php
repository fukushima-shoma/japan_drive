<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('foods', function (Blueprint $table) {
        $table->bigIncrements('id');

        $table->bigInteger('home_categories_id')->unsigned()->index();
        $table->bigInteger('food_theme_categores_id')->unsigned()->index();

        $table->string('food_name')->nullable();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
