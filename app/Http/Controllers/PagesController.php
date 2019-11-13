<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
      return view('home');
    }

    public function getDrive(){
      return view('drive');
    }

    public function getFood(){
      return view('food');
    }

    public function getSightseeing(Request $request){

      $area_id = $request -> input('area_id');
      $theme_id = $request -> input('theme_id');

      dd($area_id);
    //  $posts = Post::latest()->where('area_id', $q['area_id']);

return view ('sightseeing');
      //  return view ('sightseeing',[
      //    'posts' => $posts
      //  ]);

    }

    public function getArea(){

//      $get =

  //    return view('area');
    }

    public function getWeather(){
      return view('weather');
    }

}
