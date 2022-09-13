
@extends('app')

@section('title','$user->name')

@section('content')
@include('nav-top')

<div class="container-box">

@include('users.user')

@include('users.tabs', ['hasArticles' => false, 'hasLikes' => false])

@foreach($followers as $person)
    @include('users.person')
@endforeach
</div>
@endsection