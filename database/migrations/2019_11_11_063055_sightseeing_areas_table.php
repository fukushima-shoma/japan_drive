<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SightseeingAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sightseeing_areas', function (Blueprint $table) {
        $table->bigIncrements('id');

        $table->bigInteger('home_category_id')->unsigned()->index();
        $table->bigInteger('sightseeing_area_theme_category_id')->unsigned()->index();
        $table->bigInteger('region_id')->unsigned()->index();
        $table->bigInteger('pref_id')->unsigned()->index();
        
        $table->string('sightseeing_area_name')->nullable();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sightseeing_areas');
    }
}
