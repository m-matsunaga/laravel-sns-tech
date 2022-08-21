@csrf
<div class="form-item">
    <label for="title">タイトル</label>
    <input type="text" class="form-style" name="title" required value="{{ old('title') }}">
</div>
<div class="form-item">
    <label for=""></label>
    <textarea name="body" required class="form-area-style" placeholder="本文">{{ old('body') }}</textarea>
</div>