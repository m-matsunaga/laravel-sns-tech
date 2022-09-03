@extends('app')

@section('title','メール再設定')

@section('content')

<div class="container-box">
    <div class="app-logo">
        memo
    </div>
    <div class="form-container">
        <div class="form-box">
            <h2 class="form-title">
                パスワード再設定
            </h2>
            <!-- エラーメッセージ 表示-->
            @include('error_card_list')
            <!--  ===============  -->
            <!--  -->
            @if (session('status'))
                <div class="card-text alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <!--  -->
            <form action="{{ route('password.email') }}" method="post">
            @csrf
                <div class="form-item">
                    <label for="mail">Mail Address</label>
                    <input type="text" class="form-style" id="email" name="email" required value="{{ old('email') }}">
                </div>
                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">メール送信</button>
            </form>
            <div class="login-link">
                <a href="{{ route('login') }}" class="card-text">ログイン画面へ戻る</a>
            </div>
        </div>
    </div>
</div>

@endsection