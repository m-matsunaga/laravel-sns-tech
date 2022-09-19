@extends('app')

@section('title','ログイン')

@section('content')

<div class="container-box">
    <div class="app-logo">
        memo
    </div>
    <div class="form-container">
        <div class="form-box">
            <h2 class="form-title">
                ログイン
            </h2>
            <a href="{{ route('login.{provider}', ['provider' => 'google']) }}" class="btn btn-block btn-danger">
                <i class="fab fa-google mr-1"></i>Googleでログイン
            </a>
            <!-- エラーメッセージ 表示-->
            @include('error_card_list')
            <!--  -->
            <form action="{{ route('login') }}" method="post">
            @csrf
                <div class="form-item">
                    <label for="mail">Mail Address</label>
                    <input type="text" class="form-style" id="email" name="email" required value="{{ old('email') }}">
                </div>
                <div class="form-item">
                    <label for="password">Password</label>
                    <input type="password" class="form-style" id="password" name="password" required>
                </div>
                <!-- hidden -->
                <input type="hidden" name="remember" id="remember" value="on">
                <!--  -->
                <div class="pass-reset">
                    <a href="{{ route('password.request') }}" class="pass-reset-link">パスワード忘れた方</a>
                </div>
                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ログイン</button>
            </form>
            <div class="login-link">
                <a href="{{ route('register') }}" class="card-text">ユーザー登録はこちら</a>
            </div>
        </div>
    </div>
</div>

@endsection