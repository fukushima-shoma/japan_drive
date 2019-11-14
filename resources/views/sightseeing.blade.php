<style>

  header{
    background-color: #333333;
  }

  .checkbox{
    width: 100%;
    height: 120px;
    padding: 20px;
    background-color: #EEEEEE;
  }



  .checkbox ul li.checkbox_theme{
    font-size: 15px;
    color: black;
    display: inline-flex;
    text-align: center;
  }

  .my-big{
    color: #222222;
  }

  body{
    background-image: url('/images/.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>


<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

$(function(){
  $('area').on('click',function(){
    var url = "/area?area_id=" + $(this).attr('alt');
    $(":checkbox:checked").each(function() {
        url = url + "&theme=" + $(this).val();
    });
    window.location.href=url;
});

});

</script>




@extends('layouts.app')

@section('content')


<form class="" action="" method="GET">
  <div class="checkbox">
    <ul>
      <li class="checkbox_theme">
        <input type="checkbox" name="theme" value="1">
        <span>
          <i class="icon-trees my-big"></i>
          <br>自然・風景
        </span>
      </li>
      <li class="checkbox_theme">
        <input type="checkbox" name="theme" value="2">
        <span>
          <i class="icon-temple my-big"></i>
          <br>建物・史跡
        </span>
      </li>
      <li class="checkbox_theme">
        <input type="checkbox" name="theme" value="3">
        <span>
          <i class="icon-flowers my-big"></i>
          <br>公園・植物園
        </span>
      </li>
      <li class="checkbox_theme">
        <input type="checkbox" name="theme" value="4">
        <span>
          <i class="icon-museum my-big"></i>
          <br>美術館・博物館
        </span>
      </li>
      <li class="checkbox_theme">
        <input type="checkbox" name="theme" value="5">
        <span>
          <i class="icon-cow my-big"></i>
          <br>テーマパーク
        </span>
      </li>
      <li class="checkbox_theme">
        <input type="checkbox" name="theme" value="6">
        <span>
          <i class="icon-onsen my-big"></i>
          <br>温泉
        </span>
      </li>
      <li class="checkbox_theme">
        <input type="checkbox" name="theme" value="7">
        <span>
          <i class="icon-meal my-big"></i>
          <br>グルメ
        </span>
      </li>
    </ul>
  </div>

<div class="saitama_area_map">
  <picture>
    <img src="../images/saitama_map.png"  alt="埼玉県の地図" usemap="#saitama-map-clickable">
  </picture>

  <map name="saitama-map-clickable">
    <area target="" alt="三郷市" title="三郷市"  coords="936,436,930,436,924,437,917,438,911,439,905,440,900,441,899,447,900,454,902,461,902,467,905,471,910,474,916,476,919,483,920,490,917,495,911,502,918,501,923,504,921,509,925,514,932,513,937,515,937,508,936,501,935,493,935,484,935,474,937,466,944,466,951,466,952,459,952,452,947,449,941,449,941,434,942,441" shape="poly">
    <area target="" alt="吉川市" title="吉川市" href="" coords="902,375,908,375,914,375,896,381,895,387,901,391,900,397,894,401,890,405,896,409,896,414,897,420,896,430,897,441,905,439,912,437,918,435,926,435,934,435,940,434,939,426,942,420,945,412,944,405,937,403,930,403,927,396,923,390,920,383,920,376" shape="poly">
    <area target="" alt="松伏市" title="松伏市" href="" coords="891,341,884,343,879,346,875,350,871,353,866,364,872,366,877,370,879,375,876,380,869,385,876,388,882,395,893,398,900,394,893,386,895,378,887,374,873,367,876,358,884,359,891,359,899,359" shape="poly">
    <area target="" alt="春日部市" title="春日部市" href="" coords="871,267,875,270,878,275,880,282,879,289,879,296,879,304,878,311,881,317,884,323,883,330,891,340,884,341,879,343,875,347,869,351,866,364,861,356,855,351,849,346,847,354,849,364,840,369,836,362,828,364,825,353,816,349,804,351,806,345,799,338,809,334,808,324,795,311,799,305,804,312,822,312,835,306,844,301,850,304,852,294,851,283,864,282,869,275" shape="poly">
    <area target="" alt="越谷市" title="越谷市" href="" coords="849,348,848,357,852,363,846,367,839,370,835,362,829,364,832,369,824,377,824,387,830,391,830,406,825,408,825,419,848,440,857,441,866,445,881,439,878,432,895,431,896,411,887,407,898,394,893,397,884,395,876,388,867,384,876,372" shape="poly">
    <area target="" alt="草加市" title="草加市" href="" coords="896,433,890,431,880,434,882,439,865,449,857,442,849,443,843,436,839,441,839,447,845,453,849,460,848,467,856,476,843,480,849,488,858,491,868,490,877,487,874,480,877,476,874,464,883,470,887,462,891,455,887,448,889,442,896,442" shape="poly">
    <area target="" alt="八潮市" title="八潮市" href="" coords="890,444,891,454,890,462,884,472,875,467,879,477,876,483,875,494,880,500,890,503,897,498,910,505,912,497,919,495,916,479,903,472,898,467,898,456,896,445" shape="poly">
    <area target="" alt="川口市" title="川口市" href="" coords="820,416,821,422,817,434,813,427,804,425,803,438,799,445,790,441,785,454,772,452,774,461,771,466,782,470,795,470,796,481,789,486,790,500,803,508,817,508,818,517,826,510,833,502,827,489,837,486,847,478,854,475,847,464,845,454,838,445,841,436" shape="poly">
    <area target="" alt="幸手市" title="幸手市" href="" coords="807,207,802,216,788,217,783,229,785,236,795,240,791,250,803,259,809,260,812,265,822,267,823,255,832,257,840,268,851,269,853,255,857,253,847,224,840,235,825,227,812,227" shape="poly">
    <area target="" alt="62" title="杉戸町" coords="858,254,852,255,850,269,840,268,830,257,823,257,825,265,820,270,811,267,807,261,791,251,788,263,795,275,806,283,820,290,833,291,830,302,824,307,840,304,850,303,850,285,855,283,865,284,868,273,869,265" shape="poly">
    <area target="" alt="宮代町" title="宮代町" href="" coords="778,255,779,260,781,266,776,270,781,282,791,285,790,292,790,297,790,302,800,305,804,309,820,311,826,303,832,303,832,290,816,288,797,278,788,266,789,257" shape="poly">
    <area target="" alt="さいたま市" title="さいたま市" href="" coords="784,309,785,315,794,316,793,328,783,331,764,334,754,339,749,345,745,358,739,352,733,356,724,343,715,347,704,348,712,366,697,362,685,367,683,377,677,371,672,372,674,389,679,402,676,406,681,416,673,418,682,424,683,430,694,430,701,440,726,442,725,454,719,456,720,462,727,464,737,471,746,469,753,466,761,471,767,467,772,463,770,451,780,454,790,440,798,444,803,439,803,425,814,428,818,423,824,409,829,408,829,394,824,390,824,380,831,370,823,355,814,351,804,354,804,348,797,340,806,337,807,325,795,313" shape="poly">
    <area target="" alt="蕨市" title="蕨市" href="" coords="767,467,784,471,796,471,795,484,788,484,767,484,766,477,762,472" shape="poly">
    <area target="" alt="戸田市" title="戸田市" href="" coords="728,472,729,476,731,486,741,487,750,501,790,501,789,487,765,486,766,479,753,467,747,471,736,469" shape="poly">

  </map>


</div>
</form>




@endsection
