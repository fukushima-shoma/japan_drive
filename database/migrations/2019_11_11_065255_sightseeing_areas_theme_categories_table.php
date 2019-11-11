<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SightseeingareasThemeCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sightseeing_area_theme_categories', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('sightseeing_area_theme_category_name')->nullable();

      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('sightseeing_area_theme_categories');
    }
}
