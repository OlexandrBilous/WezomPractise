@extends('layouts.layout')
@section('content')
                                @foreach($articles as $article)
                                    @include('layouts.articles')
                                @endforeach
                                {{$articles->links()}}

@stop


