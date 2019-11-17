<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'area_name', 'latitude', 'longitude'
  ];

  public function posts(){
    return $this->hasMany(\App\Post::class,'area_id', 'id');
  }
}
