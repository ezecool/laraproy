

@csrf

<div>
    <label for="">Titulo</label>
    <br>
    <input type="text" name="title" value="{{ old('title', $project->title) }}">
</div>

<div>
    <label for="">Url</label>
    <br>
    <input type="text" name="url" value="{{ old('url', $project->url) }}">
</div>

<div>
    <label for="">Descripci&oacute;n</label>
    <br>
    <textarea name="description">{{ old('description', $project->description) }}</textarea>
</div>

<button type="submit">{{ $btnText }}</button>
