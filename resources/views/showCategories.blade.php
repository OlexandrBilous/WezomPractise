@extends('layouts.layout')
@section('content')
    <h2 class="blog-post-title">Статьи по категории: {{ $category->name }}</h2>
    <div class="container text-center">
                                @foreach($articles as $article)
                                    <article class="blog-post">
    <h2 class="blog-post-title">{{$article->title}}</h2>
                                        <br><br>
        <p>{{$article->content}} </p>

    <a href="{{ $article->link() }}" class="btn btn-primary">Читать</a>
                                    </article>
    @endforeach
                            </div>

@endsection
