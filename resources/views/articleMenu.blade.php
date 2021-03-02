@extends('layouts.layout')
@section('content')

    <div class="container text-center">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newArticle">
            Добавление статьи
        </button>
        <a href="{{route('article-list')}}" class="btn btn-warning">Страница модерации</a>

        <div class="modal fade" id="newArticle">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Добавление статьи</h5>
                        <button class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('addArticle') }}">
                            <input type="text" class="form-control mb-2 {{ $errors->has('title') ? 'is-invalid' : ''}}"
                                   name="title" placeholder="Название">
                            @error('title')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <select class="form-control mb-2" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach

                            </select>
                            <textarea class="form-control mb-2 {{ $errors->has('content') ? 'is-invalid' : ''}}"
                                      name="content"
                                      placeholder="Содержимое" rows="10"></textarea>
                            @error('content')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <input type="date" name="postdate" value="{{now()}}"
                                   class="form-control">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                            <input type="submit" value="Опубликовать">
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button href='{{ route('article-menu') }}'><a href="">Назад</a></button>
                    </div>
                </div>
            </div>
        </div>

    @foreach($articles as $article)
        @include('layouts.articlesv0')
    @endforeach
    {{$articles->links()}}
    @endsection
