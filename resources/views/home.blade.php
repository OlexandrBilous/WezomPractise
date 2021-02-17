@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">УРА</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h3>Вы вошли в систему!</h3><br>

                        <!-- Комментарии -->
                        <div class="comments">
                            @foreach($comments as $comment)
                                <p>{{ $comment->user_id }}: {{ $comment->comment }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
