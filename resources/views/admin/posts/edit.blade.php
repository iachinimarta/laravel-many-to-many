@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('admin.posts.update', ['post' => $post->id])}}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Post Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required max="50" value="{{old('title', $post->title)}}">
            </div>

            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

            <div class="mb-3">
                <label for="selectCategory">Category</label><br>
                <select name="category_id" id="selectCategory" class="form-control @error('category_id') is-invalid @enderror">
                    <option {{old('category_id')==''?'selected':''}} value="">-</option>
                    @foreach ($categories as $category)
                        <option {{old('category_id')==$category->id?'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            @error('category_id')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

            <div class="form-check mb-4">
                @foreach ($tags as $tag)
                    @if ($errors->any())
                        <input 
                        {{(in_array($tag->id, old('tags', [])))?'checked':''}} 
                        name="tags[]" 
                        class="form-check-input" 
                        type="checkbox" 
                        value="{{$tag->id}}" 
                        id="tag_{{$tag->id}}">
                    @else
                        <input 
                        {{($post->tags->contains($tag))?'checked':''}} 
                        name="tags[]" 
                        class="form-check-input" 
                        type="checkbox" 
                        value="{{$tag->id}}" 
                        id="tag_{{$tag->id}}">    
                    @endif      
                    <label class="form-check-label mr-4" for="tag_{{$tag->id}}">{{$tag->name}}</label>
                @endforeach
            </div>

            @error('tags')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

            <div class="form-floating mb-4">
                <label for="floatingTextarea">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" placeholder="Insert content here" id="floatingTextarea" name="content">{{old('content', $post->content)}}</textarea>        
            </div>

            @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

            <button class="btn btn-info"><a href="{{route('admin.posts.index')}}"><-</a></button>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
    </div>
@endsection