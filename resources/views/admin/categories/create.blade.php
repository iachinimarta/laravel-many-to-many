@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('admin.categories.store')}}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Category Title</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required max="50" value="{{old('name')}}">
            </div>

            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror

            <div class="form-floating mb-4">
                <label for="floatingTextarea">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Insert description here" id="floatingTextarea" name="description" required>{{old('description')}}</textarea>        
            </div>

            @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
            
            <a class="btn btn-info href="{{route('admin.categories.index')}}"><-</a>
            <button type="submit" class="btn btn-primary">Submit</button>

            </form>
    </div>
@endsection