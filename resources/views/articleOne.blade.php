@extends('layouts.layout')
@section('content')
    <div class="container-md"
    @include('layouts.articlesv0')
    <h2>Комментарии:</h2>
    @foreach($comments as $comment)
        <div>
                <div >
                    <h4>Автор:{{ $comment->user->name }}</h4>
                    <div >
                        <br>
                        <h3> {{ $comment->comment }}</h3>
                    </div>
                    <br>
                    <div >{{ \Carbon\Carbon::parse($comment->updated_at)->format('d/m/Y')}}</div>
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
