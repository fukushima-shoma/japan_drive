<style>

  header{
    background-color: #333333;
  }

  .chapternav{
    background-color: #EEEEEE;
  }

  .chapternav-link{
    color: black;
  }

  .my-big{
    color: #222222;
  }


</style>


@extends('layouts.app')

@section('content')

<nav class="chapternav navbar-expand-md with-paddles">
    <div class="chapternav-wrapper">
         <ul class="chapternav-items">

           <li class="chapternav-item chapternav-item-hokkaido">
             <a class="chapternav-link" href="{{ url('/') }}">
                <i class="icon-hokkaido my-big"></i>
               <span class="chapternav-label"><br>北海道</span>
             </a>
           </li>

           <li class="chapternav-item chapternav-item-touhoku">
             <a class="chapternav-link" href="">
               <i class="icon-touhoku my-big"></i>
               <span class="chapternav-label"><br>東北</span>
             </a>
           </li>

           <li class="chapternav-item chapternav-item-kanto">
             <a class="chapternav-link" href="">
               <i class="icon-kanto my-big"></i>
               <span class="chapternav-label"><br>関東</span>
             </a>
           </li>

           <li class="chapternav-item chapternav-item-hokuriku">
             <a class="chapternav-link" href="">
               <i class="icon-hokuriku my-big"></i>
               <span class="chapternav-label"><br>北陸・甲信越</span>
             </a>
           </li>

           <li class="chapternav-item chapternav-item-toukai">
             <a class="chapternav-link" href="">
               <i class="icon-tokai my-big"></i>
               <span class="chapternav-label"><br>東海</span>
             </a>
           </li>

           <li class="chapternav-item chapternav-item-kinki">
            <a class="chapternav-link" href="">
              <i class="icon-kinki my-big"></i>
              <span class="chapternav-label"><br>近畿</span>
            </a>
           </li>

           <li class="chapternav-item chapternav-item-chugoku">
            <a class="chapternav-link" href="">
              <i class="icon-tyugoku my-big"></i>
              <span class="chapternav-label"><br>中国</span>
            </a>
           </li>

           <li class="chapternav-item chapternav-item-sikoku">
            <a class="chapternav-link" href="">
              <i class="icon-sikoku my-big"></i>
              <span class="chapternav-label"><br>四国</span>
            </a>
           </li>

           <li class="chapternav-item chapternav-item-kyusyu">
            <a class="chapternav-link" href="">
              <i class="icon-kyusyu my-big"></i>
              <span class="chapternav-label"><br>九州</span>
            </a>
           </li>

           <li class="chapternav-item chapternav-item-okinawa">
            <a class="chapternav-link" href="">
              <i class="icon-okinawa my-big"></i>
              <span class="chapternav-label"><br>沖縄</span>
            </a>
           </li>

        </ul>
    </div>
</nav>

<section class="section-wrap">
  <div id="forecast-map-wrap">
    <picture>
      <img src="../images/japan_weather.png" width="638" height="600" alt="全国の天気" usemap="#weather-map-image-clickable">
    </picture>
    <div id="forecast-map">
      <a id="forecast-map-entry" href="" class="forecast-map-entry" style="top: 168px; left:269px">
        札幌
        <br>
        <img class="weather-image">
        <br>
        <span class="max-temp"></span>
        <span class="grey"></span>
        <span class="min-temp"></span>
        <br>
        <span class="prob-precip"></span>
      </a>
      <a id="forecast-map-entry" href="" class="forecast-map-entry" style="top: 240px; left:568px">
        釧路
        <br>
        <img class="weather-image">
        <br>
        <span class="max-temp"></span>
        <span class="grey"></span>
        <span class="min-temp"></span>
        <br>
        <span class="prob-precip"></span>
      </a>
      <a id="forecast-map-entry" href="" class="forecast-map-entry" style="top:351px; left:474px">
        仙台
        <br>
        <img class="weather-image">
        <br>
        <span class="max-temp"></span>
        <span class="grey"></span>
        <span class="min-temp"></span>
        <br>
        <span class="prob-precip"></span>
      </a>
      <a id="forecast-map-entry" href="" class="forecast-map-entry" style="top:507px; left:414px">
        東京
        <br>
        <img class="weather-image">
        <br>
        <span class="max-temp"></span>
        <span class="grey"></span>
        <span class="min-temp"></span>
        <br>
        <span class="prob-precip"></span>
      </a>
      <a id="forecast-map-entry" href="" class="forecast-map-entry" style="top:575px; left:331px">
        名古屋
        <br>
        <img class="weather-image">
        <br>
        <span class="max-temp"></span>
        <span class="grey"></span>
        <span class="min-temp"></span>
        <br>
        <span class="prob-precip"></span>
      </a>
      <a id="forecast-map-entry" href="" class="forecast-map-entry" style="top:600px; left:249px">
        大阪
        <br>
        <img class="weather-image">
        <br>
        <span class="max-temp"></span>
        <span class="grey"></span>
        <span class="min-temp"></span>
        <br>
        <span class="prob-precip"></span>
      </a>
      <a id="forecast-map-entry" href="" class="forecast-map-entry" style="top:605px; left:164px">
        高知
        <br>
        <img class="weather-image">
        <br>
        <span class="max-temp"></span>
        <span class="grey"></span>
        <span class="min-temp"></span>
        <br>
        <span class="prob-precip"></span>
      </a>
      <a id="forecast-map-entry" href="" class="forecast-map-entry" style="top:599px; left:16px">
        鹿児島
        <br>
        <img class="weather-image">
        <br>
        <span class="max-temp"></span>
        <span class="grey"></span>
        <span class="min-temp"></span>
        <br>
        <span class="prob-precip"></span>
      </a>
      <a id="forecast-map-entry" href="" class="forecast-map-entry" style="top:480px; left:16px">
        福岡
        <br>
        <img class="weather-image">
        <br>
        <span class="max-temp"></span>
        <span class="grey"></span>
        <span class="min-temp"></span>
        <br>
        <span class="prob-precip"></span>
      </a>
      <a id="forecast-map-entry" href="" class="forecast-map-entry" style="top:204px; left:1px">
        沖縄
        <br>
        <img class="weather-image">
        <br>
        <span class="max-temp"></span>
        <span class="grey"></span>
        <span class="min-temp"></span>
        <br>
        <span class="prob-precip"></span>
      </a>
      <a id="forecast-map-entry" href="" class="forecast-map-entry" style="top:399px; left:95px">
        広島
        <br>
        <img class="weather-image">
        <br>
        <span class="max-temp"></span>
        <span class="grey"></span>
        <span class="min-temp"></span>
        <br>
        <span class="prob-precip"></span>
      </a>
      <a id="forecast-map-entry" href="" class="forecast-map-entry" style="top:358px; left:189px">
        金沢
        <br>
        <img class="weather-image">
        <br>
        <span class="max-temp"></span>
        <span class="grey"></span>
        <span class="min-temp"></span>
        <br>
        <span class="prob-precip"></span>
      </a>
      <a id="forecast-map-entry" href="" class="forecast-map-entry" style="top: 273px; left:269px">
        新潟
        <br>
        <img class="weather-image">
        <br>
        <span class="max-temp"></span>
        <span class="grey"></span>
        <span class="min-temp"></span>
        <br>
        <span class="prob-precip"></span>
      </a>
    </div>
    <map name="weather-map-image-clickable">
        <area target="" alt="北海道地方" title="北海道地方" href="" coords="421,36,414,38,415,45,416,55,418,61,412,62,403,62,395,61,389,62,388,71,388,81,396,82,404,82,412,82,410,88,407,93,409,101,408,107,402,110,396,110,391,107,384,106,382,111,387,115,382,118,378,121,370,127,368,136,371,143,376,148,374,156,373,164,380,166,386,162,391,157,397,158,403,155,397,150,392,147,386,144,381,139,384,132,391,131,396,134,399,139,404,134,410,132,417,131,423,131,429,136,435,140,442,143,448,146,455,149,460,144,461,137,466,132,471,126,477,122,482,118,492,120,499,119,507,116,514,113,521,109,517,103,510,103,507,95,506,88,511,83,514,76,509,70,506,76,501,81,497,86,491,86,486,83,481,78,473,79,466,76,460,71,452,64,445,60,440,52,434,44,428,38" shape="poly">
        <area target="" alt="東北地方" title="東北地方" href=""
        coords="396,165,393,177,401,176,404,182,398,184,391,186,381,176,381,184,375,187,371,191,371,197,373,203,369,211,364,214,369,217,375,218,373,224,370,230,369,239,368,245,365,253,361,257,365,261,372,263,372,270,367,277,370,285,365,287,362,291,357,293,355,300,357,305,366,304,372,302,378,303,381,307,387,306,391,309,396,305,396,293,399,298,400,283,394,275,399,270,403,265,410,263,412,256,415,247,421,244,424,234,426,224,435,220,442,221,450,222,457,221,457,213,458,205,456,197,448,197,442,198,432,198,423,198,416,198,412,194,407,190,409,178,410,171,404,168" shape="poly">
        <area target="" alt="関東地方" title="関東地方" href=""
        coords="368,306,362,308,357,311,351,308,346,310,341,314,336,316,340,326,331,320,339,331,344,335,350,340,352,346,352,351,352,356,360,356,364,359,363,349,367,344,371,347,367,344,375,351,372,356,370,361,367,367,373,365,377,361,382,357,383,362,383,349,388,345,395,342,390,336,386,330,386,321,390,313,383,311,379,315,377,308,373,303" shape="poly">
        <area target="" alt="中部地方" title="中部地方" href="" coords="358,267,354,273,348,276,342,278,336,275,336,267,330,265,326,272,324,277,325,283,320,287,311,287,301,287,293,291,286,294,285,300,287,305,286,311,283,316,279,322,275,326,271,329,269,335,272,340,276,347,279,352,281,358,284,363,292,362,291,370,296,373,302,373,297,379,309,373,322,376,315,377,328,373,333,367,339,365,338,371,342,377,349,376,349,369,351,362,349,347,342,342,337,336,335,329,328,323,332,315,337,310,344,306,350,298,349,304,349,292,355,289,359,285,361,277,362,270,368,267,363,262" shape="poly">
        <area target="" alt="近畿地方" title="近畿地方" href=""
        coords="254,349,248,349,247,342,242,345,234,345,230,352,228,345,230,360,227,366,226,372,231,371,237,371,240,377,239,385,245,374,254,374,253,383,245,387,247,393,244,398,250,398,252,407,261,411,266,406,270,401,275,396,277,390,283,388,288,386,292,380,282,375,281,368,282,361,279,355,274,349,266,348" shape="poly">
        <area target="" alt="中国地方" title="中国地方" href=""
        coords="225,350,219,351,218,345,218,339,213,335,205,335,196,335,189,335,181,337,177,342,177,348,180,353,179,359,173,361,168,364,165,368,161,373,154,374,150,377,147,382,139,381,136,387,136,393,147,397,141,395,153,395,159,395,163,399,169,397,169,389,176,385,181,389,188,384,196,381,204,379,210,379,217,379,223,375,225,369,226,361,229,355" shape="poly">
        <area target="" alt="四国地方" title="四国地方" href=""
        coords="239,379,231,379,223,379,214,379,207,380,202,381,199,386,200,392,195,395,190,391,183,395,180,402,174,404,166,411,173,414,177,426,174,404,172,422,181,430,188,431,192,425,195,419,198,411,204,410,212,409,217,413,221,417,224,409,230,404,235,399,236,392,239,386" shape="poly">
        <area target="" alt="九州地方" title="九州地方" href=""
        coords="133,397,127,400,122,403,117,405,111,409,101,416,105,410,98,421,96,427,94,433,99,436,106,436,112,436,118,436,125,436,123,443,120,448,117,453,117,460,119,465,115,470,120,474,127,474,129,480,137,478,141,472,148,469,149,462,150,455,151,448,155,442,158,436,163,423,162,417,161,429,155,416,155,410,155,403,150,406,142,406,138,402" shape="poly">
        <area target="" alt="沖縄" title="沖縄" href=""
        coords="159,21,159,36,161,48,161,56,162,64,162,69,162,77,161,83,157,87,153,90,147,95,140,102,135,109,124,108,116,108,109,108,99,109,85,109,84,101,84,93,84,85,84,74,84,61,84,44,84,31,85,23,96,19,115,18,127,18,137,18,147,18,89,18,154,16" shape="poly">
    </map>
  </div>
</section>





@endsection
