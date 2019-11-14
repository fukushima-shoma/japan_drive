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
        <a href="">{{ $posts[0]->area_id }}</a>
        ＞
        <a>{{ $posts[0]->title }}</a>

  </div>




  @foreach($posts as $post)
        <div class="spot">
          <div class="spot-body">
            <div class="spot-photos">
              <img class="spot-photo" src="{{ asset('public/image/'.$post->image_path1) }}">
              <img class="spot-photo" src="{{ asset('public/image/'.$post->image_path2) }}">
              <img class="spot-photo" src="{{ asset('public/image/'.$post->image_path3) }}">
            </div>
            <h5 class="card-title">スポット名:{{ $post->title }}</h5>
            <h5 class="card-theme">テーマ:{{ $post->theme}}</h5>
            <h5 class="card-content">{{ $post->content }}</h5>
            <h5 class="card-address">所在地:{{ $post->address }}</h5>
            <h5 class="card-access">アクセス:{{ $post->access }}</h5>
            <h5 class="card-parking">周辺駐車場:{{ $post->parking }}</h5>
          </div>
        </div>
  @endforeach

</div>



@endsection
