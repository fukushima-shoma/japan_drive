<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('posts', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title')->nullable();
      $table->text('theme')->nullable();
      $table->Integer('category_id')->unsigned()->index();
      $table->Integer('area_id')->unsigned()->index();
      $table->string('zip')->nullable();
      $table->string('prefecture')->nullable();
      $table->string('address')->nullable();
      $table->string('access')->nullable();
      $table->string('parking')->nullable();
      $table->text('content')->nullable();
      $table->string('image_path1')->nullable();
      $table->string('image_path2')->nullable();
      $table->string('image_path3')->nullable();
      $table->Integer('likes_count')->unsigned()->index();
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
        Schema::dropIfExists('posts');
    }
}
