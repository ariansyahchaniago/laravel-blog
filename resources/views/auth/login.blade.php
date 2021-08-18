@extends('partial.logintemplate')
@section('main')
    <!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">REGISTER</div>
  </div>
  <div class="form">
    <h2>Login To Your Account</h2>
    <form action="{{ route('login')}}" method="POST">
        @csrf
      <input type="text" name="email" placeholder="Username"/>
      <input type="password" name="password" placeholder="Password"/>
      <button type="submit">LOGIN</button>
    </form>
  </div>
  <div class="form">
    <h2>Create An Account</h2>
    <form action="{{ route('register')}}" method="POST">
        @csrf
      <input type="text" name="name" placeholder="Full Name"/>
      <input type="email" name="email" placeholder="Email Address"/>
      <input type="password" name="password" placeholder="Password"/>
      <input type="password" name="password_confirmation" placeholder="Confirm Password"/>
      <button type="submit">REGISTER</button>
    </form>
  </div>
  <div class="cta"><a href="#">LOGIN BLOG</a></div>
</div>
@endsection