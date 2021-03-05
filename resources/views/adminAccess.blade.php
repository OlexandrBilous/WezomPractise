@extends('layouts.layout')
@section('content')

    <form method="post" action="{{ route('admin-access-save',$user) }}">
        <select class="form-control mb-2" name="role_id">
            @foreach($roles as $role)
                <option value="{{$role->id}}">{{$role->name}}</option>
            @endforeach

        </select>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" required>
        <input type="submit" value="Выдать права">
    </form>

@endsection
