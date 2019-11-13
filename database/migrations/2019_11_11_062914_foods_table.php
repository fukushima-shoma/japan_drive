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

        $table->bigInteger('home_category_id')->unsigned()->index();
        $table->bigInteger('food_theme_category_id')->unsigned()->index();
        $table->bigInteger('region_id')->unsigned()->index();
        $table->bigInteger('pref_id')->unsigned()->index();
        $table->bigInteger('season_id')->unsigned()->index();

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
