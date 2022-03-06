<div class="form-group">
    <input type="text" class="form-control" name="title" required value="{{ old('title') ?? $post->title ?? '' }}">
</div>
<div class="form-group">
    <textarea class="form-control" rows="10" name="descr" required>{{ old('descr') ?? $post->descr ?? '' }}</textarea>
</div>
<div class="form-group">
    <input type="file" name="img">
</div>

