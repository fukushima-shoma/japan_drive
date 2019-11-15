<?php
namespace App;

class ShowService{
  // 日本語に変換
  public function getTranslation($arg){
      switch ($arg) {
          case 'overcast clouds':
              return 'どんよりした雲';
              break;
          case 'broken clouds':
              return '千切れ雲';
              break;
          case 'scattered clouds':
              return '散らばった雲';
              break;
          case 'few clouds':
              return '少ない雲';
              break;
          case 'light rain':
              return '小雨';
              break;
          case 'moderate rain':
              return '雨';
              break;
          case 'heavy intensity rain':
              return '大雨';
              break;
          case 'very heavy rain':
              return '激しい大雨';
              break;
          case 'clear sky':
              return '快晴';
              break;
          case 'shower rain':
              return 'にわか雨';
              break;
          case 'light intensity shower rain':
              return '小雨のにわか雨';
              break;
          case 'heavy intensity shower rain':
              return '大雨のにわか雨';
              break;
          case 'thunderstorm':
              return '雷雨';
              break;
          case 'snow':
              return '雪';
              break;
          case 'mist':
              return '靄';
              break;
          case 'tornado':
              return '強風';
              break;
          default:
              return $arg;
      }
  }

  // アイコン取得
  public function getIcon($arg){
      switch ($arg) {
          case 'clear sky':
              return 'sun';
              break;
          case 'few clouds':
              return 'few_sun';
              break;
          case 'overcast clouds':
              return 'clouds';
              break;
          case 'broken clouds':
          case 'scattered clouds':
              return 'few_clouds';
              break;
          case 'light rain':
          case 'light intensity shower rain':
              return 'light_rain';
              break;
          case 'moderate rain':
          case 'shower rain':
              return 'moderate_rain';
              break;
          case 'heavy intensity rain':
          case 'very heavy rain':
          case 'heavy intensity shower rain':
              return 'heavy_rain';
              break;
          case 'thunderstorm':
              return 'thunderstorm';
              break;
          case 'snow':
              return 'snow';
              break;
          case 'mist':
              return '靄';
              break;
          case 'tornado':
              return 'tornado';
              break;
          default:
              return $arg;
      }
  }

  public function getWeather($type, $latitude, $longitude){
      $api_base = 'https://api.openweathermap.org/data/2.5/';
      $api_parm = '?lat='.$latitude.'&lon='.$longitude.'&units=metric&appid=4f291da39170c92970adfe359b2c0ced';
      $api_url = $api_base.$type.$api_parm;

      return json_decode(file_get_contents($api_url), true);
  }


}


 ?>
