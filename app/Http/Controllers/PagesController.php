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

    public function getSightseeing(){
      return view('sightseeing');
    }

    public function getWeather(){
      return view('weather');
    }

}
