@extends('app')

@section('title','記事投稿画面')

@section('content')
@include('nav-top')

<div class="container-box">
    <div class="form-container">
        <div class="form-box">
            <form action="{{ route('articles.store') }}" method="post">
                @include('articles.form')
                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">投稿する</button>
            </form>
        </div>
    </div>
</div>

@endsection