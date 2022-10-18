@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Info</h3>
        <ul class="mb-5">
            <li>
                Title: <strong>{{$category->name}}</strong>
            </li>
            <li>Description: {{$category->description}}</li>
        </ul>

        <a class="btn btn-info" href="{{route('admin.categories.index')}}"><-</a>
    </div>
@endsection