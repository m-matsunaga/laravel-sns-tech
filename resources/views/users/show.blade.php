
@extends('app')

@section('title','$user->name')

@section('content')
@include('nav-top')

<div class="container-box">

<div class="card-box">
        <div class="card-body-up">
            <div>
                <a href="{{route('users.show',['name'=> $user->name])}}">
                    <i class="fas fa-user-circle fa-3x mr-1"></i>
                </a>
                <div>
                    <div class="username">
                        <a href="{{route('users.show',['name'=> $user->name])}}">
                            {{$user->name}}
                        </a>
                    </div>
                </div>
            </div>
            <!-- Vue フォローボタン -->
            @if(Auth::id() !== $user->id)
            <follow-button>
            </follow-button>
            @endif
        </div>
        <div class="card-body-down">
            <div class="card-text">
                <a href="" class="text-muted">
                    10 フォロー
                </a>
                <a href="" class="text-muted">
                    10 フォロワー
                </a>
            </div>
        </div>
    </div>

</div>
@endsection