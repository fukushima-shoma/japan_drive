<style>



.list_flex{
   width: 80%;}
.list_flex ul{
  display: flex;
  flex-wrap: wrap;}
.list_flex li {
   width: 50%; /* ％指定で列を自由に設定可能 */
   box-sizing: border-box;
   padding-left:5px;}
.list_flex ul:first-child li {
   padding-top: 13px;}
.list_flex li:nth-child(n+1) {
   text border-top: 1px solid #000;}
.list_flex ul:last-child li {
   border-bottom: 1px solid #000;}
.list_flex li:nth-child(n+1) {
   border-left: 1px solid #000;}
.list_flex li:last-child {
   border-right: 1px solid #000;}

   *モーダル用*/
   .js-modal__bg {
     width: 100%;
     height: 100%;
     background-color: rgba(0,0,0,0.6);
     position: fixed;
     top: 0;
     left: 0;
     z-index: 10;
     display: none;
   }
   .js-modal__main {
     width: calc(100% - 32px);
     height: 80%;
     padding: 16px;
     bottom: -81%;
     left: 0;
     background: #fff;
     border-radius:4px 4px 0 0 ;
     position: fixed;
     z-index: 11;
     opacity: 0;
   }
   .js-modal__btn {
       color:#76952f;
     cursor: pointer;
     -webkit-tap-highlight-color:rgba(0,0,0,0);
   }
   .js-modal__btn--close {
       margin-top: 40px;
       text-align: center;
       text-decoration: underline;
   }
   .js-modal__btn--close--fix {
     width: 30px;
     height: 30px;
     //background: #333;
     border-radius: 50%;
     position: absolute;
     top: -50px;
     right: 5px;
     z-index: 101;
     cursor:pointer;
     -webkit-tap-highlight-color:rgba(0,0,0,0);
   }
   .js-modal__btn--close--fix:before{
     content:"";
     width: 20px;
     height: 20px;
     border-right:3px solid #fff;
     transform: rotate(-45deg);
     position: absolute;
     top:12px;
     left:-3px;
   }
   .js-modal__btn--close--fix:after{
     content:"";
     width: 20px;
     height: 20px;
     border-right:3px solid #fff;
     transform: rotate(45deg);
     position: absolute;
     top:-2px;
     left:-3px;
   }
   /*下から上*/
   @keyframes SlideUp {
     0% {
       opacity: 0;
       transform: translateY(-1%);
     }
     100% {
       opacity: 1;
       transform: translateY(-80%);
     }
   }
   /*上から下*/
   @keyframes SlideDown {
     0% {
       opacity: 1;
       transform: translateY(-80%);
     }
     100% {
       opacity: 0;
       transform: translateY(-1%);
     }
   }
   .js-modal__main._slideUp {
   animation: SlideUp .5s ease-in-out forwards;
   }
   .js-modal__main._slideDown {
   animation: SlideDown .5s ease-in-out forwards;
   }



   {
       box-sizing: border-box;
       margin: 0;
       padding: 0;
   }
   .content{
       margin: 0 auto;
       padding: 40px;
   }
   .modal{
       display: none;
       height: 100vh;
       position: fixed;
       top: 0;
       width: 100%;
   }
   .modal__bg{
       background: rgba(0,0,0,0.8);
       height: 100vh;
       position: absolute;
       width: 100%;
   }
   .modal__content{
       background: #fff;
       left: 50%;
       padding: 40px;
       position: absolute;
       top: 50%;
       transform: translate(-50%,-50%);
       width: 60%;
   }
</style>


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

            <h5 class="card-title">スポット名:{{ $post->title }}</h5>
            <h5 class="card-theme">テーマ:{{ $post->theme}}</h5>

            <div class="content">
                <a class="js-modal-open" href="">

                  <div class="p-now-weather-wrap">
                      <h2 class="p-now-weather-mh">現在の天気</h2>
                      <div class="p-now-weather">

                          <div class="p-now-detail">
                            <p class="p-icn"><img src="https://openweathermap.org/img/wn/{{ $weather_info ['now_icon'] }}@2x.png" alt="{{ $weather_info ['now_des'] }}"></p>
                            <p class="p-now-des">{{ $weather_info ['now_des'] }}</p>
                            <p class="p-now-temp">{{ $weather_info ['now_temp'] }}℃</p>
                            <p class="p-now-humidity">湿度：{{ $weather_info ['now_humidity'] }}%</p>
                          </div>
                      </div>
                  </div>

                </a>
            </div>
            <div class="modal js-modal">
                <div class="modal__bg js-modal-close"></div>
                <div class="modal__content">

                    @foreach($forecast_array_list as $forecast_array_list)
                      @if($loop->first or $forecast_array_list ['time'] == '00:00' )
                        <ul class="">
                          <p class="">{{ $forecast_array_list ['date'] }}</p>
                      @endif
                        <li>
                          <p class="">{{ $forecast_array_list ['time'] }}</p>
                          <div class="">
                            <p class=""><img src="https://openweathermap.org/img/wn/{{ $forecast_array_list ['weather_icon'] }}@2x.png" alt="{{ $forecast_array_list ['weather_des'] }}"></p>
                            <div class="">
                              <p class="">{{ $forecast_array_list ['weather_des'] }}</p>
                              <p class="">{{ $forecast_array_list ['temp'] }}℃</p>
                              <p class="">湿度:{{ $forecast_array_list ['humidity'] }}%</p>
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

            <div class="spot-photos">
              <img class="spot-photo" src="{{ asset('public/image/'.$post->image_path1) }}">
              <img class="spot-photo" src="{{ asset('public/image/'.$post->image_path2) }}">
              <img class="spot-photo" src="{{ asset('public/image/'.$post->image_path3) }}">
            </div>
            <h5 class="card-content">{{ $post->content }}</h5>
          </div>
        </div>
        <div class="list_flex list_flex_4col">
          <ul>
            <li>住所</li><li>{{ $post->address }}</li>
          </ul>
          <ul>
            <li>アクセス</li><li>{{ $post->access }}</li>
          </ul>
          <ul>
            <li>周辺駐車場</li><li>{{ $post->parking }}</li>
          </ul>
        </div>
      </div>
  @endforeach

</div>



@guest
@if (Route::has('register'))

ユーザー登録をしてクチコミ投稿しよう

<a href="{{ route('register') }}">登録はこちらから</a>
<a href="{{ route('login') }}">すでに登録された方はこちら</a>
  @endif
@else

<div class="js-modal__btn">クチコミ投稿</div>

<div class="js-modal__bg"></div>
<div class="js-modal__main">


<p>
  <form action="{{ route('comments.store')}}" method="POST" enctype="multipart/form-data" >
      {{ csrf_field() }}

      <div class="form-group">
        <label for="comment"></label>
        <textarea class="form-control" rows="5" id="comment" name="comment"　placeholder="思い出や感想・おすすめのポイントをお聞かせください。"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlFile1">写真を投稿する</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_path">
      </div>

      <input type="hidden" name="user_id" value="{{ Auth::id() }}">
      <input type="hidden" name="post_id" value="{{ $post->id }}">
      <input type="hidden" name="area_id" value="{{ $post->area_id }}">

      <button type="submit" class="btn btn-primary">クチコミする</button>
    </form>


</p>

<p class="js-modal__btn--close">close</p>
<p class="js-modal__btn--close--fix"></p>
</div>


</div>

    @endguest

    @foreach($posts as $post)
        @foreach($post->comments as $comment)
        <div class="card">
          <div class="card-body">
            <a class="card-text">
              投稿者:{{ $comment->users->name }}
            </a>
            <p class="card-text">{{ $comment->comment }}</p>
            <img src="{{ asset('storage/image/'.$comment->image_path) }}">

            </p>
          </div>
        </div>
        @endforeach
      @endforeach



@endsection
