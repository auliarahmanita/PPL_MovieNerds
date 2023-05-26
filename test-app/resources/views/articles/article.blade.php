@extends('layouts.main')

@section('container') 

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-5">{{$article->title}}</h1>
                <p>By. <a href="/articles/?author={{ $article->author->username }}" class="text-decoration-none">{{ $article->author->name }}</a> in <a href="/articles/?tag={{ $article->tag->slug }}" class="text-decoration-none">{{ $article->tag->name }}</a></p>
                <img src="https://source.unsplash.com/1200x400/?{{ $article->tag->name }}"  class="mb-4 img-fluid" alt="{{ $article->tag->name }}">
                <article class="my-3">
                    {!! $article->konten !!}  
                </article>                
                <a href="/articles" class="d-block mt-3">Back to Articles</a>
            </div>
        </div>
    </div>  

@endsection