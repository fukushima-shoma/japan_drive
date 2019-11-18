<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\ShowService;
use DB;

class PagesController extends Controller
{


    public function top(){
      return redirect(route('pages.index'));
    }

    public function index(Request $request){

      $q = \Request::query();

      if(isset($q['area_id'])){
        $query = Post::select(['posts.*', 'areas.area_name'])->where('area_id', $q['area_id'])
          ->join('areas', 'areas.id', '=', 'posts.area_id');
        // テーマがチェックされているか判定
        if(isset($q['theme'])){
          if(count($q['theme']) == 1){
            $query->where('theme', 'like', '%'.$q['theme'][0].'%');
          }else{
            $query->where(function($query)use($q){
              for($i = 0; $i < count($q['theme']); $i++){
                $query->orWhere('theme', 'like', '%'.$q['theme'][$i].'%');
              }
            });
          }
          $posts = $query->paginate(5);
          $search_result = '該当件数 '.$posts->total().'件中'.$posts->firstItem().'件～'.$posts->lastItem().'件表示';
          return view ('area',compact('posts'), ['search_result' => $search_result]);
        } else {
            $posts = $query->paginate(5);
            $search_result = '該当件数 '.$posts->total().'件中'.$posts->firstItem().'件～'.$posts->lastItem().'件表示';
            return view ('area',compact('posts'), ['search_result' => $search_result]);
        }
    }else{
      return view ('/sightseeing');
    }

    }



    public function show(Request $request)  {
        $q = \Request::query();

        $posts = Post::select()
          ->join('areas', 'areas.id', '=', 'posts.area_id')
          ->where('posts.id', $q['id'])
          ->get();
        $comments = Comment::latest()->where('post_id', $q['id'])->orderBy('id', 'desc')->paginate(3);
        $comments->load('users');

        $service = new ShowService();

        // 緯度
        $latitude = $posts[0]['latitude'];
        // 経度
        $longitude = $posts[0]['longitude'];
        // 5日間天気
        $response = $service->getWeather('forecast', $latitude, $longitude);

        $weather_list = $response['list']; // list配下

        $forecast_array_list = array();

        foreach( $weather_list as $items ):
          $temp = $items['main']['temp']; // 気温
          $temp_max = $items['main']['temp_max']; // 最高気温
          $temp_min = $items['main']['temp_min']; // 最低気温
          $humidity = $items['main']['humidity']; // 湿度
          $weather = $items['weather'][0]['main']; // 天気
          $weather_des = $service->getTranslation($items['weather'][0]['description']); // 天気説明
          $weather_icon = $items['weather'][0]['icon']; // 天気アイコン（公式のアイコンを使用）
          $datetime = new \DateTime();
          $datetime->setTimestamp( $items['dt'] )->setTimeZone(new \DateTimeZone('Asia/Tokyo')); // 日時 - 協定世界時 (UTC)を日本標準時 (JST)に変換
          $date =  $datetime->format('Y年m月d日'); //　日付
          $time = $datetime->format('H:i'); // 時間

          $forecast_info = array(
            'temp' => $temp,
            'temp_max' => $temp_max,
            'temp_min' => $temp_min,
            'humidity' => $humidity,
            'weather' => $weather,
            'weather_des' => $weather_des,
            'weather_icon' => $weather_icon,
            'datetime' => $datetime,
            'date' => $date,
            'time' => $time,
          );

          array_push($forecast_array_list, $forecast_info);

        endforeach;


        // 現在の天気
        $response_now = $service->getWeather('weather', $latitude, $longitude);

        $now_des = $service->getTranslation($response_now['weather'][0]['description']); // 現在の天気説明

        $now_icon = $response_now['weather'][0]['icon']; // 現在の天気アイコン（公式のアイコンを使用）
        $now_temp = $response_now['main']['temp']; // 現在の気温
        $now_humidity = $response_now['main']['humidity']; // 現在の湿度

        $weather_info = array(
          'response_now' => $response_now,
          'now_des' => $now_des,
          'now_icon' => $now_icon,
          'now_temp' => $now_temp,
          'now_humidity' =>   $now_humidity
        );

        $param = array(
          'id' => $q['id']
        );
        return view ('show',[
          'posts' => $posts,
          'comments' => $comments,
          'param' => $param,
          'weather_info' => $weather_info,
          'forecast_array_list' => $forecast_array_list
        ]);

    }

    public function search(Request $request){

        $posts = Post::where('title', 'like', '%' .$request->search. '%')
            ->orWhere('theme', 'like', '%' .$request->search. '%')->paginate(3);
        $search_result = $request->search. 'の検索結果 '.$posts->total().'件中'.$posts->firstItem().'件～'.$posts->lastItem().'件表示';

        return view ('area',[
          'posts' => $posts,
          'search_result' => $search_result,
          'search_query' => $request->search,
        ]);
    }

}
