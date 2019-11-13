<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

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

      $q = \Request::query();

      $posts = Post::latest()->where('area_id', $q['area_id'])->get();



      dd($posts);

        return view ('sightseeing',[
         'posts' => $posts
     ]);


    }

    public function getArea(){

//      $get =

  //    return view('area');
    }

    public function getWeather(){
      return view('weather');
    }

}
