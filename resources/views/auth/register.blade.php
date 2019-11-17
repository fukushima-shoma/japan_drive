
@extends('layouts.app')

@section('content')
<div class="main">
   <p class="sign" align="center">会員登録</p>
   <form class="form1" method="POST" action="{{ route('register') }}">
     @csrf
     <input id="name" class="un form-control @error('name') is-invalid @enderror" type="text" align="center" placeholder="ニックネーム" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
     @error('name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
     @enderror
​
     <input id="email" class="un form-control @error('email') is-invalid @enderror" type="email" align="center" placeholder="メールアドレス" name="email" value="{{ old('email') }}" required autocomplete="email">
     @error('email')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
     @enderror
​
     <input id="password" class="pass form-control @error('password') is-invalid @enderror" type="password" align="center" placeholder="パスワード" name="password" required autocomplete="new-password">
     @error('password')
       <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
       </span>
     @enderror
​
     <input id="password-confirm" class="pass form-control" type="password" align="center" placeholder="確認用パスワード" name="password_confirmation" required autocomplete="new-password">
​
     <button class="submit" align="center">登録する</button>
  </form>
</div>
@endsection
