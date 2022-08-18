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
                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ログイン</button>
            </form>
            <div class="login-link">
                <a href="{{ route('register') }}" class="card-text">ユーザー登録はこちら</a>
            </div>
        </div>
    </div>
</div>

@endsection