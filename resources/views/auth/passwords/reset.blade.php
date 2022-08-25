@extends('app')

@section('title','パスワード再設定')

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
            <!--  -->
            <form action="{{ route('password.update') }}" method="post">
            @csrf
            <div class="form-item">
                <label for="password">New Password</label>
                <input type="password" class="form-style" id="password" name="password" required>
            </div>
            <div class="form-item">
                <label for="password_confirmation">パスワード確認用</label>
                <input type="password" class="form-style" id="password_confirmation" name="password_confirmation" required>
            </div>
            <!-- hidden -->
                <input type="hidden" name="email" value="{{$email}}">
                <input type="hidden" name="token" value="{{$token}}">
            <!--  -->
                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">送信</button>
            </form>
        </div>
    </div>
</div>

@endsection