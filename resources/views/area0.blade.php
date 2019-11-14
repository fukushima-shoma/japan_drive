<style>

  header{
    background-color: black;
  }



</style>

@extends('layouts.app')

@section('content')

<div id="container">
  <div id="topickpath">
    <ul>
      <li>
        <a href="/sightseeing">トップ</a>
        "＞"
        <a href="">エリア</a>
      </li>
    </ul>
  </div>

  @foreach($posts as $post)
        <div class="card">
          <div class="card-body">
            <img src="{{ asset('public/image/'.$post->image) }}">
            <h5 class="card-title">{{ $post->title }}</h5>
            <h5 class="card-theme">{{ $post->theme}}</h5>
            <h5 class="card-content">{{ $post->content }}</h5>
            <a href="" class="card-detail">詳細</a>
          </div>
        </div>
  @endforeach

</div>



@endsection
