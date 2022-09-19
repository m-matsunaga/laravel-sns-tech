@extends('app')

@section('title','ユーザー登録')

@section('content')

<div class="container-box">
    <div class="app-logo">
        memo
    </div>
    <div class="form-container">
        <div class="form-box">
            <h2 class="form-title">
                ユーザー登録
            </h2>
            <!-- エラーメッセージ 表示-->
            @include('error_card_list')
            <!--  -->
            <form action="{{ route('register.{provider}', ['provider' => $provider]) }}" method="post">
            @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-item">
                    <label for="name">User Name</label>
                    <input type="text" class="form-style" id="name" name="name" required value="{{ old('name') }}">
                    <small>英数字3〜16文字(登録後の変更はできません)</small>
                </div>
                <div class="form-item">
                    <label for="mail">Mail Address</label>
                    <input class="form-control" type="text" id="email" name="email" value="{{ $email }}" disabled>
                </div>
                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ユーザー登録</button>
            </form>
            <div class="login-link">
                <a href="{{ route('login') }}" class="card-text">ログインはこちら</a>
            </div>
        </div>
    </div>
</div>

@endsection