<style>

  header{
    background-color: black;
  }



</style>

@extends('layouts.app')

@section('content')

<div id="container">
  <div id="topickpath">

        <a href="/sightseeing">トップ</a>
        ＞
        <a>{{ $posts[0]->area_id }}</a>

  </div>


  @foreach($posts as $post)
        <div class="card">
          <div class="card-body">
            <img class="card-photo" src="{{ asset('public/image/'.$post->image_path1) }}">
            <h5 class="card-title">{{ $post->title }}</h5>
            <h5 class="card-theme">{{ $post->theme}}</h5>
            <h5 class="card-content">{{ $post->content }}</h5>
            <a href="{{ url('/show' , $post->id)}}" class="card-detail">詳細</a>
          </div>
        </div>
  @endforeach

</div>



@endsection
