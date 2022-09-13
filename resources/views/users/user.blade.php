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
            @if(Auth::id() !== $user->id)
            <follow-button
                :initial-is-followed-by='@json($user->isFollowedBy(Auth::user()))'
                :authorized='@json(Auth::check())'
                endpoint="{{route('users.follow',['name'=> $user->name])}}">
            </follow-button>
            @endif
        </div>
        <div class="card-body-down">
        <div class="card-text">
            <a href="{{route('users.followings',['name'=> $user->name])}}" class="text-muted">
                {{$user->count_followings}}フォロー
            </a>
            <a href="{{route('users.followers',['name'=> $user->name])}}" class="text-muted">
                {{$user->count_followers}}フォロワー
            </a>
        </div>
        </div>
    </div>