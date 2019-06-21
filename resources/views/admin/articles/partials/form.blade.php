<label for="">Status</label>
<select class="form-control" name="published">
    @if (isset($article->id))
        <option value="0" @if ($article->published == 0) selected="" @endif>not published</option>
        <option value="1" @if ($article->published == 1) selected="" @endif>published</option>
    @else
        <option value="0">Not published</option>
        <option value="1">published</option>
    @endif
</select>

<label for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="Title" value="{{$article->title ?? ""}}" required>

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Auto" value="{{$article->slug ?? ""}}" readonly="">

<label for="">Parent</label>
<select class="form-control" name="categories[]" multiple="">
    <option value="0">-- without parent --</option>
    @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">Short description</label>
<textarea class="form-control" id="description_short" name="description_short">{{$article->description_short ?? ''}}</textarea>

<label for="">Full description</label>
<textarea class="form-control" id="description" name="description">{{$article->description ?? ''}}</textarea>

<hr />

<label for="">Meta title</label>
<input class="form-control" type="text" name="meta_title" placeholder="Meta title">{{$article->meta_title ?? ''}}</input>

<hr />
<label for="">Meta description</label>
<input class="form-control" type="text" name="meta_description" placeholder="Meta description">{{$article->meta_description ?? ''}}</input>

<hr />
<label for="">Keywords</label>
<input class="form-control" type="text" name="meta_keyword" placeholder="Meta keyword">{{$article->meta_title ?? ''}}</input>
<hr />

<input class="btn btn-primary" type="submit" value="Save">