@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('admin.categories.update', ['category' => $category->id])}}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Category Title</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required max="50" value="{{old('name', $category->name)}}">
            </div>

            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

            <div class="form-floating mb-4">
                <label for="floatingTextarea">Description</label>
                <textarea class="form-control @error('content') is-invalid @enderror" placeholder="Insert description here" id="floatingTextarea" name="description">{{old('description', $category->description)}}</textarea>        
            </div>

            @error('content')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

            <button class="btn btn-info"><a href="{{route('admin.categories.index')}}"><-</a></button>
            <button type="submit" class="btn btn-primary">Update</button>
            </form>
    </div>
@endsection