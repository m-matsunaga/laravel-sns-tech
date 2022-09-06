    <div class="card-box">
        <div class="card-body-up">
            <div>
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
            @if(Auth::id() === $article->user_id)
            <!-- DropDown -->
            <div class="dropdown">
                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <button type="button" class="btn btn-link text-muted m-0 p-2">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                </a>
                <div class="dropdown-menu">
                    <a href="{{route('articles.edit',['article'=> $article])}}" class="dropdown-item">
                        <i class="fas fa-pen mr-1"></i>記事を更新する
                    </a>
                    <a class="dropdown-item" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
                        <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                    </a>
                </div>
            </div>
            <!--  -->
            <!-- modal -->
            <div id="modal-delete-{{$article->id}}" class="modal fade" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{ route('articles.destroy', ['article' => $article]) }}">
                        @csrf
                        @method('DELETE')
                            <div class="modal-body">
                                {{ $article->title }}を削除します。よろしいですか？
                            </div>
                            <div class="modal-footer justify-content-between">
                                <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                                <button type="submit" class="btn btn-danger">削除する</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--  -->
            @endif
        </div>
        <div class="card-body-down">
            <h3 class="title">
                <a href="{{route('articles.show',['article'=> $article])}}">
                    {{$article->title}}
                </a>
            </h3>
            <div class="card-text">
            {{$article->body}}
            </div>
            <div class="card-like">
                <article-like
                    :initial-is-liked-by='@json($article->isLikedBy(Auth::user()))'
                    :initial-count-likes='@json($article->count_likes)'
                    :authorized='@json(Auth::check())'
                    endpoint="{{route('articles.like',['article'=> $article])}}"
                >
                </article-like>
            </div>
            @foreach($article->tags as $tags)
                @if($loop->first)
                    <div class="card-tags">
                @endif
                    <a href="{{ route('tags.show', ['name' => $tags->name]) }}" class="border p-1 mr-1 mt-1 text-muted">
                        {{$tags->Hashtag}}
                    </a>
                @if ($loop->last)
                    </div>
                @endif
            @endforeach
        </div>
    </div>