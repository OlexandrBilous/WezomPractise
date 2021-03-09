@extends('layouts.layout')
@section('content')

    @foreach($users as $user)
        <article class="blog-post">
            <div class="container text-center">
                <h2 class="blog-post-title">{{$user->name}}</h2>
<br><br>
                <a href="{{route('admin-access', $user)}}" class="btn btn-primary">Изменить права</a>

    @endforeach


@endsection
