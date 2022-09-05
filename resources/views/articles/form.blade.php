@csrf
<!-- エラーメッセージ 表示-->
    @include('error_card_list')
<!--  -->
<div class="form-item">
    <label for="title">タイトル</label>
    <input type="text" class="form-style" name="title" required value="{{ $article->title ?? old('title') }}">
</div>
<div class="form-item">
    <article-tags-input
        :initial-tags='@json($tagNames ?? [])'
        :autocomplete-items='@json($allTagNames ?? [])'>
    </article-tags-input>
</div>
<div class="form-item">
    <label for=""></label>
    <textarea name="body" required class="form-area-style" placeholder="本文">{{ $article->body ?? old('body') }}</textarea>
</div>