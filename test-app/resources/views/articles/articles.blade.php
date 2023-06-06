@extends('layouts.main') 

@section('container') 
    <link rel="stylesheet" href="{{ asset('/css/article.css') }}">
    <section>
        <div class="my-width">
            <div class="terbaru-content">
                <div class="title-index">
                    <p>{{ $title }}</p>
                </div>

        @if ($articles->count())
            <div class="card mb-5">
                    @if($articles[0]->photo)
                        <img src="{{ 'public/storage/photo/'.$articles[0]->photo }}">
                    @else
                        <img src="https://source.unsplash.com/500x400/?{{ $articles[0]->tag->name }}" class="card-img-top" alt="{{ $articles[0]->tag->name }}">
                    @endif
                <div class="card-body text-center">
                    <h3 class="card-title"><a href="/article/{{ $articles[0]->slug }}" class="text-decoration-none text-dark">{{ $articles[0]->title }}</a></h3>
                    <p>
                        <small class="text-muted">
                            By. <a href="/api/articles?author={{ $articles[0]->author->username }}" class="text-decoration-none">{{ $articles[0]->author->name }}</a> in <a href="/api/articles?tag={{ $articles[0]->tag->slug }}" class="text-decoration-none">{{ $articles[0]->tag->name }}</a> 
                            {{ $articles[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $articles[0]->excerpt }}</p>
                    <a href="/article/{{ $articles[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
                </div>
                <br>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($articles->skip(1) as $article)            
                    <div class="col-md-4 mb-5">
                        <div class="card">
                            <img src="https://source.unsplash.com/500x400/?{{ $article->tag->name }}"  class="card-img-top" alt="{{ $article->tag->name }}">
                            <div class="position-absolute top-0 start-0 px-3 py-2 ">
                                <a href="/api/articles?tag={{ $article->tag->slug }}" class="text-white text-decoration-none">{{ $article->tag->name }}</a>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">{{ $article->title }}</h3>
                                <p>
                                    <small class="text-muted">
                                        By. <a href="/api/articles?author={{ $article->author->username }}" class="text-decoration-none">{{ $article->author->name }}</a> 
                                        {{ $article->created_at->diffForHumans() }}
                                    </small>
                                </p>                        
                                <p class="card-text">{{ $article->excerpt }}</p>
                                <a href="/article/{{ $article->slug }}" class="btn btn-primary">Read More</a> <br>
                            </div>
                        </div>
                    </div>
                    <br>
                    @endforeach
                </div>
            </div>
        @else
            <p class="text-center fs-4">No articles Found</p>
        @endif

        <div>
            {{ $articles->links() }}
        </div>
    </section>
@endsection