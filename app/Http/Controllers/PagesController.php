<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\ShowService;

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
        $posts->load('comments', 'comments.users');

        // エリアリスト
        $areas = array(
            1850144 => '東京都',
            6940394 => '埼玉県（さいたま市）',
            2130404 => '北海道（江別市）',
            1856035 => '沖縄県（那覇市）',
            1853909 => '大阪府（大阪市）'
        );
        // メイン処理
        try {
            if( isset($_GET['area']) ){
                if( !array_key_exists($_GET['area'], $areas) ){
                    throw new Exception('不正なパラメーターです。 セレクトボックスから選択してください。');
                }
            }
          }catch( Exception $e){

            }

        // ID
        // $area_id =  '1850144';
        $service = new ShowService();

        // 5日間天気
        $response = $service->getWeather('forecast', 36.025851, 139.736743);

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
        $response_now = $service->getWeather('weather', 36.025851, 139.736743);

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


            return view ('show',[
              'posts' => $posts,
              'weather_info' => $weather_info,
              'forecast_array_list' => $forecast_array_list
            ]);

    }

    public function search(Request $request){

        $posts = Post::where('title', 'like', "%{$request->search}%")
            ->orWhere('theme', 'like', "%{$request->search}%");

          $search_result = $request->search. 'の検索結果'.$posts->count().'件';

          return view ('area',[
            'posts' => $posts,
            'search_result' => $search_result,
            'search_query' => $request->search,
          ]);
    }

}
