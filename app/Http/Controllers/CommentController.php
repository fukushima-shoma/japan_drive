<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use App\Comment;
use App\User;
use App\Post;

class CommentController extends Controller
{

  public function store(Request $request)
    {

       if($request->file('image_path')->isValid()) {

           $q = \Request::query();
            $posts = new Comment;

            $posts->user_id = $request->user_id;
            $posts->post_id = $request->post_id;
            $posts->comment = $request->comment;


            $time = date("Ymdhis");
            $filename = $request->file('image_path')->storeAs('public/image', $time.'_'.Auth::user()->id . '.jpg');


            $posts->image_path = basename($filename);

            $posts->save();
          }

          $posts = Post::latest()->where('id', $posts['post_id'])->get();
          $posts->load('comments', 'comments.users');


        return view ('/show', [

        'posts' => $posts

      ]);
      }
}
