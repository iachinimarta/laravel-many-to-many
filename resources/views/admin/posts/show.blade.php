@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Info</h3>
        <ul class="mb-5">
            <li>
                Title: <strong>{{$post->title}}</strong>
            </li>
            <li>Content: {{$post->content}}</li>
            <li>Category: {{$post->category?$post->category->name:'NULL'}}</li>
            <li>
                @foreach ($post->tags as $tag)
                    {{$tag->name}};                    
                @endforeach
            </li>
        </ul>

        <button class="btn btn-info"><a href="{{route('admin.posts.index')}}"><-</a></button>
    </div>
@endsection