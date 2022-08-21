
@extends('app')

@section('title','記事一覧')

@section('content')
@include('nav-top')

<div class="container-box">
    <!-- card 繰り返し開始 -->
    @foreach($articles as $article)

        @include('articles.card')

    @endforeach
    <!-- card 繰り返し終了 -->
</div>
@endsection