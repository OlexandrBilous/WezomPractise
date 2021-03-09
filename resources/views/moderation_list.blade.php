@extends('layouts.layout')
@section('content')
    <a href="{{route('addCategoriesView')}}" class="btn btn-success">Добавить новую категорию</a>
    <br>  <br>
    <a href="{{route('admin-user-list')}}" class="btn btn-success">Настройки пользователей</a>
@foreach($articles as $article)
    @include('layouts.moderation_layout')
@endforeach
{{$articles->links()}}
@endsection
