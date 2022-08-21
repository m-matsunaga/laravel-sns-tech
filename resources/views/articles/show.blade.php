
@extends('app')

@section('title','記事詳細')

@section('content')
@include('nav-top')

<div class="container-box">

        @include('articles.card')

</div>
@endsection