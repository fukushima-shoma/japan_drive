

@extends('layouts.app')

@section('content')


<div id="container">

  @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
  @endif

  <div id="topickpath">

        <a href="/sightseeing">トップ</a>
        ＞
        <a>{{ $posts[0]->area_id }}</a>

  </div>

  @isset($search_result)
  <h5 class="card-title">{{ $search_result }}</h5>
  @endisset

  @foreach($posts as $post)
        <div class="card">
          <div class="card-body">
            <img class="card-photo" src="{{ asset('public/image/'.$post->image_path1) }}">
            <h5 class="card-title">{{ $post->title }}</h5>
            <h5 class="card-theme">{{ $post->theme}}</h5>
            <h5 class="card-content">{{ $post->content }}</h5>
            <a href="{{ route('pages.show', 'id='.$post->id) }}" class="card-detail">詳細</a>
          </div>
        </div>
  @endforeach

</div>


@endsection
