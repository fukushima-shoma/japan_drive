<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
jQuery(function($) {
  $('.content').each(function() {
    var $target = $(this);

    // オリジナルの文章を取得する
    var html = $target.html();

    // 対象の要素を、高さにautoを指定し非表示で複製する
    var $clone = $target.clone();
    $clone
      .css({
        display: 'none',
        position : 'absolute',
        overflow : 'visible'
      })
      .width($target.width())
      .height('auto');

    // DOMを一旦追加
    $target.after($clone);

    // 指定した高さになるまで、1文字ずつ消去していく
    while((html.length > 0) && ($clone.height() > $target.height())) {
      html = html.substr(0, html.length - 1);
      $clone.html(html + '...');
    }

    // 文章を入れ替えて、複製した要素を削除する
    $target.html($clone.html());
    $clone.remove();
  });
});
</script>

@extends('layouts.app')

@section('content')

<div id="area_blade">

@if(isset($posts[0]))
  <ul class="breadcrumb">
    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
    <a href="/sightseeing" itemprop="url">
     <span itemprop="title" >ホーム</span>
    </a>
    </li>
    <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
    <a>
     <span itemprop="title">{{ $posts[0]->area_name }}</span>
    </a>
    </li>
  </ul>
@endif


  @isset($search_result)
  <h3 class="resurch_result">{{ $search_result }}</h3>
  @endisset

  @if(count($posts) == 0)
  <div class="flexbox">
    <div class=not-found>
      <p>まだお探しの条件に合致するスポットが登録されていません。</p>
      <a href="{{ route('pages.index') }}">ホームへ戻る</a>
    </div>
  </div>

  @endif

  @foreach($posts as $post)
        <div class="card">
          <div class="card-left">
            <img class="card-photo" src="{{ asset('public/image/'.$post->image_path1) }}">
          </div>
          <div class="card-right">
            <div class=card-title>
              <p class="title">{{ $post->title }}</p>
            </div>
            <div class=card-theme>
              <p class="theme">{{ $post->theme}}</p>
            </div>
            <div class=card-content>
              <p class="content">
                {{ $post->content }}
              </p>
            </div>
            <div class=card-detail>
              <a href="{{ route('pages.show', 'id='.$post->id) }}" class="detail">詳細はこちら</a>
            </div>
          </div>
        </div>
  @endforeach



@if(isset($search_query))
    {{ $posts->appends(['search' => $search_query])->links() }}
@else
    {{ $posts->appends(request()->query())->links() }}
@endif


@endsection
