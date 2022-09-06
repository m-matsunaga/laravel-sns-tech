
@extends('app')

@section('title', $tag->hashtag)

@section('content')
@include('nav-top')

<div class="container-box">
    <div class="card-box">
        <h2>{{$tag->hashtag}}</h2>
        <div>{{$tag->articles->count()}}件</div>
    </div>
    <!-- card 繰り返し開始 -->
    @foreach($tag->articles as $article)

        @include('articles.card')

    @endforeach
    <!-- card 繰り返し終了 -->
</div>
@endsection