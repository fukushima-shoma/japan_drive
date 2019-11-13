<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'user_id', 'category_id', 'content', 'title', 'area_id',

    ];
}
