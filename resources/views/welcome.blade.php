@extends('layouts.layout')
@section('content')
    @foreach($articles as $article)
        @include('layouts.articlesv0')
    @endforeach
    {{$articles->links()}}

@stop


