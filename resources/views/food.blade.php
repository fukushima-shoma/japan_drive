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

  body{
    background-image: url('/images/food4.jpg');
    background-repeat: no-repeat;
    background-size: cover;
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



@endsection
