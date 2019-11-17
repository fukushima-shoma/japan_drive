<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use App\Comment;
use App\User;
use App\Post;
use App\ShowService;


class CommentController extends Controller
{

  public function store(Request $request)
    {

      $comments = new Comment;

      $comments->user_id = $request->user_id;
      $comments->post_id = $request->post_id;
      $comments->comment = $request->comment;
      $time = date("Ymdhis");
      if($request->file('image_path') != null) {
        $filename = $request->file('image_path')->storeAs('public/image', $time.'_'.Auth::user()->id . '.jpg');
        $comments->image_path = basename($filename);
      }
      $comments->save();
      return redirect(route('pages.show',[
        'id' => $request->post_id
      ]));
    }
}
