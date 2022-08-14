
@extends('app')

@section('title','記事一覧')

@section('content')

<div class="container">
    <!-- card 繰り返し開始 -->
    @foreach($articles as $article)
    <div class="card-box">
        <div class="card-body-up">
            <i class="fas fa-user-circle fa-3x mr-1"></i>
            <div>
                <div class="username">
                {{$article->user->name}}
                </div>
                <div class="card-date">
                {{$article->created_at->format('Y/m/d H:i')}}
                </div>
            </div>
        </div>
        <div class="card-body-down">
            <h3 class="card-title">
            {{$article->title}}
            </h3>
            <div class="card-text">
            {{$article->body}}
            </div>
        </div>
    </div>
    @endforeach
    <!-- card 繰り返し終了 -->
</div>
@endsection