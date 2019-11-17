<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(function(){
  var modalBtn = $('.js-modal__btn');
  var modalBtnClose = $('.js-modal__btn--close');
  var modalBtnCloseFix = $('.js-modal__btn--close--fix');
  var modalBg = $('.js-modal__bg');
  var modalMain = $('.js-modal__main');
  modalBtn.on('click', function (e) {
    $(this).next(modalBg).fadeIn();
    $(this).next(modalBg).next(modalMain).removeClass("_slideDown");
    $(this).next(modalBg).next(modalMain).addClass("_slideUp");
  });
  modalBtnClose.on('click', function (e) {
    modalBg.fadeOut();
    modalMain.removeClass("_slideUp");
    modalMain.addClass("_slideDown");
  });
  modalBtnCloseFix.on('click', function (e) {
    modalBg.fadeOut();
    modalMain.removeClass("_slideUp");
    modalMain.addClass("_slideDown");
  });
  modalMain.on('click', function (e) {
    e.stopPropagation();
  });
  modalBg.on('click', function () {
    $(this).fadeOut();
    $(this).next(modalMain).removeClass("_slideUp");
    $(this).next(modalMain).addClass("_slideDown");
  });
});


$(function(){
    $('.js-modal-open').on('click',function(){
        $('.js-modal').fadeIn();
        return false;
    });
    $('.js-modal-close').on('click',function(){
        $('.js-modal').fadeOut();
        return false;
    });
});

</script>
@extends('layouts.app')
​
@section('content')
  <div id="container">
    <ul class="breadcrumb">
      <li itemscope="itemscope">
        <a href="/sightseeing" itemprop="url">
         <span itemprop="title">ホーム</span>
        </a>
      </li>
      <li itemscope="itemscope" itemtype="http://data-vocabulary.org/Breadcrumb">
        <a>
         <span itemprop="title">{{ $posts[0]->area_name }}</span>
        </a>
      </li>
      <li itemscope="itemscope">
        <a>
         <span>{{ $posts[0]->title }}</span>
        </a>
      </li>
    </ul>
    @foreach($posts as $post)
      <div class="spot-info">
        <div class="info_header">
          <div class="info_header-left">
            <h1 class="spot-title">{{ $post->title }}</h1>
            <p class="spot-theme">テーマ:{{ $post->theme}}</p>
            <h4 class="card-content">{{ $post->content }}</h4>
          </div>
          <div class="info_header-right">
            <div class="now-weather-wrap">
              <a class="js-modal-open" href="">
                <p class="now-weather-mh">現在の天気</p>
                <div class="now-weather">
                  <div class="now-detail">
                    <p class="now-icn">
                      <img src="https://openweathermap.org/img/wn/{{ $weather_info ['now_icon'] }}@2x.png" alt="{{ $weather_info ['now_des'] }}">
                    </p>
                    <p class="now-des">{{ $weather_info ['now_des'] }}</p>
                    <p class="now-temp">気温:{{ $weather_info ['now_temp'] }}℃</p>
                    <p class="now-humidity">湿度：{{ $weather_info ['now_humidity'] }}%</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
          <div class="modal js-modal">
            <div class="modal__bg js-modal-close"></div>
            <div class="modal__content">
              @foreach($forecast_array_list as $forecast_array_list)
                @if($loop->first or $forecast_array_list ['time'] == '00:00' )
                  <ul class="forecast-list">
                    <p class="forecast-date">{{ $forecast_array_list ['date'] }}</p>
                @endif
                  <li>
                    <p class="forecast-time">{{ $forecast_array_list ['time'] }}</p>
                    <div class="">
                      <p class="forecast-icon">
                        <img src="https://openweathermap.org/img/wn/{{ $forecast_array_list ['weather_icon'] }}@2x.png" alt="{{ $forecast_array_list ['weather_des'] }}">
                      </p>
                      <div class="">
                        <p class="forecast-des">{{ $forecast_array_list ['weather_des'] }}</p>
                        <p class="forecast-temp">気温:{{ $forecast_array_list ['temp'] }}℃</p>
                        <p class="forecast-humidity">湿度:{{ $forecast_array_list ['humidity'] }}%</p>
                      </div>
                    </div>
                  </li>
                @if($loop->last or $forecast_array_list['time'] == '21:00')
                  </ul>
                @endif
              @endforeach
              <a class="js-modal-close" href="">閉じる</a>
            </div><!--modal__inner-->
          </div><!--modal-->
        <div class="spot-photos-wrap">
          <div class="spot-photos">
            <img class="spot-photo" src="{{ asset('public/image/'.$post->image_path1) }}">
          </div>
          <div class="spot-photo">
            <img class="spot-photo" src="{{ asset('public/image/'.$post->image_path2) }}">
          </div>
          <div class="spot-photo">
            <img class="spot-photo" src="{{ asset('public/image/'.$post->image_path3) }}">
          </div>
        </div>
      </div>
      <div class="spot_basic-information">
        <h2>スポット基本情報</h2>
        <table>
          <tr>
            <th>住所</th>
            <td>{{ $post->address }}</td>
          </tr>
          <tr>
            <th>アクセス</th>
            <td>{{ $post->access }}</td>
          </tr>
          <tr>
            <th>周辺駐車場</th>
            <td>{{ $post->parking }}</td>
          </tr>
        </table>
      </div>
    @endforeach
  </div>
  @guest
    @if (Route::has('register'))
      <p class="comment-card">ユーザー登録をしてクチコミ投稿しよう!!</p>
      <div class="non-login">
        <div class="login-card">
          <p class="login-card-text">
            <a href="{{ route('register') }}">登録はこちらから</a>
          </p>
        </div>
        <div class="login-card">
          <p class="login-card-text">
            <a href="{{ route('login') }}">すでに登録された方はこちら</a>
          </p>
        </div>
      </div>
      @endif
    @else
      <div class="js-modal__btn">
        <h3 class="comment-botton">クチコミ投稿はこちら</h3>
      </div>
      <div class="js-modal__bg"></div>
        <div class="js-modal__main">
          <div class="comment_form-wapper">
            <form action="{{ route('comments.store')}}" method="POST" enctype="multipart/form-data" class="comment-form">
              {{ csrf_field() }}
              <div class="form-textarea">
                <label for="comment"></label>
                <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="思い出や感想・おすすめのポイントをお聞かせください。"></textarea>
              </div>
              <div class="form-picture">
                <label for="exampleFormControlFile1">写真を投稿する:</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_path">
              </div>
              <input type="hidden" name="user_id" value="{{ Auth::id() }}">
              <input type="hidden" name="post_id" value="{{ $param['id'] }}">
              <input type="hidden" name="area_id" value="{{ $post->area_id }}">
              <div class="form-botton">
                <button type="submit" class="btn btn-primary">
                  <a class="word_btn">クチコミする</a>
                </button>
              </div>
            </form>
          <div class="close">
            <p class="js-modal__btn--close"><strong>close</strong></p>
            <p class="js-modal__btn--close--fix"></p>
          </div>
        </div>
      </div>
    @endguest
      <h3 class="comment-card">みんなのクチコミ</h3>
      @foreach($comments as $comment)
        <div class="comment-card">
          <div class="comment-left">
            @if(isset($comment->image_path))
            <img src="{{ asset('storage/image/'.$comment->image_path) }}">
            @else
            <img src="{{ asset('images/noimage.jpg') }}">
            @endif
          </div>
          <div class="comment-right">
            <h3 class="card-text">
              投稿者:{{ $comment->users->name }}
            </h3>
            <p class="card-text">{{ $comment->comment }}</p>
          </div>
        </div>
      @endforeach
      {{ $comments->appends($param)->links() }}
  @endsection
