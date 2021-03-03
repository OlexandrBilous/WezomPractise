@extends('layouts.layout')
@section('content')
<form method="post" action="{{ route('article-check', $article) }}" >
    @include('layouts.formcheck', ['title' => 'Изменить статью'])
</form>
@endsection
