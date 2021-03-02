<form method="post" action="{{ route('article-check', $article) }}" >
<div>
    <h3>Проверка статьи</h3>
    <div class="form-group">
        <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" name="title" value="{{$article->title}} "  aria-label="Username" aria-describedby="addon-wrapping" required>
        @error('title')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <br>
    <div class="form-group">
                    <textarea class="form-control {{$errors->has('content') ? 'is-invalid' : ''}}" name="content"
                              rows="4">{{$article->content}}</textarea>
        @error('content')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <br>
    <select class="form-control mb-2" name="category_id" >
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
            {{$category->id}}
    </select>
    <br><br><br>
    <h5>Опубликовать статью?</h5>
    <select class="form-control mb-2" name="checked" >
            <option value="Да">Да</option>
            <option value="Нет">Нет</option>
    </select>
    <br><br><br>
    <input type="date" name="postdate" value="{{\Carbon\Carbon::create($article->postdate)}}"
           class="form-control {{$errors->has('postdate') ? 'is-invalid' : ''}} ">
    @error('postdate')
    <div class="text-danger">{{ $message }}</div>
    @enderror

    <br><br><br>

    <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
    <input type="submit" class="btn btn-primary" value="Проверить статью">
</div>
</form>

