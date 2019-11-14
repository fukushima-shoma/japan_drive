<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{


    public function index(Request $request){

      $q = \Request::query();

      $posts = Post::latest()->where('area_id', $q['area_id'])->get();

        return view ('area',compact('posts'));

    }

    public function show(Request $request ){

      $q = \Request::query();

      $posts = Post::latest()->where('id', $q['id'])->get();

        return view ('show',compact('posts'));
   }

}
