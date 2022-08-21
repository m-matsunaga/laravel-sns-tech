@extends('app')

@section('title','記事更新画面')

@section('content')
@include('nav-top')

<div class="container-box">
    <div class="form-container">
        <div class="form-box">
            <form action="{{ route('articles.update',['article'=>$article]) }}" method="post">
                @method('PATCH')
                @include('articles.form')
                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">更新する</button>
            </form>
        </div>
    </div>
</div>

@endsection