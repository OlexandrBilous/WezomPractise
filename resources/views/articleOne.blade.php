@extends('layouts.layout')
@section('content')

    <h1 class="h3 dx-blog-post-title"><{{$article->title}}</h1>
    <ul class="dx-blog-post-info">
        <li>Date: {{$article->postdate}}</li>

        <li>Category:
            <ul class="dx-blog-post-categories">

                {{ $category }}
            </ul>
        </li>
        <li>Author: {{$username}}</li>
    </ul>
    <p class="mnb-2">{{$article->content}}</p>

    <div class="dx-box mt-55">
        <h2 class="h4 mb-45">Comments:</h2>
        @foreach($comments as $comment)
            <div class="dx-comment">
                <div>
                    <div class="dx-comment-img">
                        <img src="assets/images/avatar-1.png" alt="">
                    </div>
                    <div class="dx-comment-cont">
                        <a href="#" class="dx-comment-name">{{ $comment->user->name }}</a>
                        <div class="dx-comment-text">
                            <p class="mb-0">{{ $comment->comment }}</p>
                        </div>
                        <div class="dx-comment-date">{{$comment->updated_at}}</div>
                    </div>
                </div>
                @endforeach

                @auth()

                    <form method="post" action="{{ route('comment') }}">
                        <input type="text" class="form-control mb-2" name="comment">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
                        <input type="hidden" name="articles_id" value="{{ $article->id }}">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <input type="submit" value="Оставить комментарий">
                    </form>
                @endauth
            </div>
    </div>
@endsection
