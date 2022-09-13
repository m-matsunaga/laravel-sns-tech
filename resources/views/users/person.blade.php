<div class="card-box">
    <div class="card-body-up">
        <div>
            <a href="{{route('users.show',['name'=> $person->name])}}">
                <i class="fas fa-user-circle fa-3x mr-1"></i>
            </a>
            <div>
                <div class="username">
                    <a href="{{route('users.show',['name'=> $person->name])}}">
                        {{$person->name}}
                    </a>
                </div>
            </div>
        </div>
        @if(Auth::id() !== $person->id)
        <follow-button
        :initial-is-followed-by='@json($person->isFollowedBy(Auth::user()))'
        :authorized='@json(Auth::check())'
        endpoint="{{route('users.follow',['name'=> $person->name])}}">
        </follow-button>
        @endif
    </div>
</div>