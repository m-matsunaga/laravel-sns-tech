
@extends('app')

@section('title','ユーザー登録')

@section('content')

<div class="container-box">
    <div class="register-container">
        <div class="app-title">
            memo
        </div>
        <div class="register-box">
            <h2 class="register-title">
                ユーザー登録
            </h2>
            <form action="{{ route('register') }}" method="post">
            @csrf
                <div class="form-item">
                    <label for="name">User Name</label>
                    <input type="text" class="form-style" id="name" name="name" required value="{{ old('name') }}">
                </div>
                <div class="form-item">
                    <label for="mail">Mail Address</label>
                    <input type="text" class="form-style" id="email" name="email" required value="{{ old('email') }}">
                </div>
                <div class="form-item">
                    <label for="password">Password</label>
                    <input type="password" class="form-style" id="password" name="password">
                </div>
                <div class="form-item">
                    <label for="password_confirmation">Password Confirmation</label>
                    <input type="password" class="form-style" id="password_confirmation" name="password_confirmation">
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