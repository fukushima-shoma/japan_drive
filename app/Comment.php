<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = [
    'user_id', 'post_id', 'comment', 'image_path'
  ];

  public function users(){

        return $this->belongsTo(\App\User::class, 'foreign_key');
    }

  public function post(){

        return $this->belongsTo(\App\Post::class,'foreign_key');
    }
}
