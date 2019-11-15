<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = [
    'user_id', 'post_id', 'comment', 'image_path'
  ];

  public function users(){

        return $this->belongsTo(\App\User::class, 'user_id');
    }

  public function post(){

        return $this->belongsTo(\App\Post::class,'post_id', 'id');
    }
}
