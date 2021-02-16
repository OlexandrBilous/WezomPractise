@extends('layouts.layout')
@section('content')

    <form method="post" action="{{ route('article-save', $article) }}" >
        @include('layouts.form', ['title' => 'Изменить статью'])
    </form>
@endsection

