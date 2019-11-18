
@extends('layouts.app')
​
@section('content')
​
<div class="main">
   <p class="sign" align="center">ログインフォーム</p>
   <form class="form1" method="POST" action="{{ route('login') }}">
     @csrf
     <input id="email" class="un form-control @error('email') is-invalid @enderror" type="email" align="center" placeholder="メールアドレス" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
     <br>
     @error('email')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
     @enderror
     <input id="password" class="pass form-control @error('password') is-invalid @enderror" type="password" align="center" placeholder="パスワード" name="password" required autocomplete="current-password">
​    <br>
     @error('password')
       <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
       </span>
     @enderror
     <button class="submit" align="center">ログイン</button>
   </form>
</div>
​
@endsection
