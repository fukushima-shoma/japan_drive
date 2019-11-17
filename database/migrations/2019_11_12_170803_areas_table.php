<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('areas', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('area_name');
      $table->string('latitude');
      $table->string('longitude');
      $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
      $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas');
    }
}
