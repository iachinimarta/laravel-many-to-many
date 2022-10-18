{{-- Pagina che si vede dopo il login --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>HomePage</h1>
        <ul>
            <li><a href="{{route('admin.posts.index')}}">Vai alla gestione dei post</a></li>
            <li><a href="{{route('admin.categories.index')}}">Vai alla gestione delle categorie</a></li>
        </ul>
        
        
    </div>
@endsection