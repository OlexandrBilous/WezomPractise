@extends('layouts.layout')
@section('content')
    <a href="{{route('addCategoriesView')}}" class="btn btn-success">Добавить новую категорию</a>
    <br>
    <a href="{{route('admin-access')}}" class="btn btn-success">Выдать права администратора</a>
@foreach($articles as $article)
    @include('layouts.moderation_layout')
@endforeach
{{$articles->links()}}
@endsection
