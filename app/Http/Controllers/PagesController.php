<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{


    public function index(Request $request){

      $q = \Request::query();

      if(isset($q['area_id'])){
        $posts = Post::latest()->where('area_id', $q['area_id'])->get();

          return view ('area',compact('posts'));
      } else {
              return view ('/sightseeing');
      }

    }


    public function show(Request $request)  {
        $q = \Request::query();

        $posts = Post::latest()->where('id', $q['id'])->get();

            return view ('show',compact('posts'));

    }

    public function search(Request $request){


                  $posts = Post::where('title', 'like', "%{$request->search}%")
                      ->orWhere('content', 'like', "%{$request->search}%")
                      ->paginate(5);

                      $search_result = $request->search. 'の検索結果'.$posts->total().'件';

                    return view ('area',[
                      'posts' => $posts,
                      'search_result' => $search_result,
                      'search_query' => $request->search
            ]);
    }

}
