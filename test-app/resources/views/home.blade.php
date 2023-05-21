@extends('layouts.main')

{{-- @extends(Auth::check() ? 'partials.navbarlogged' : 'layouts.main') --}}

@section('container')
    {{-- <h1 class="mb-3 text-center">{{ $title }}</h1> --}}

    <br>
    <div>
        <img src="https://source.unsplash.com/500x400/?{{ $articles[0]->tag->name }}" class="card-img-top" alt="{{ $articles[0]->tag->name }}">
        <div>
            <h1 class="card-title"><a href="/article/{{ $articles[0]->slug }}" class="text-decoration-none text-dark">{{ $articles[0]->title }}</a></h1>
            <p>
                <small>
                    {{ $articles[0]->created_at->diffForHumans() }} <br>
                    Ditulis oleh <a href="/articles/?author={{ $articles[0]->author->username }}" class="text-decoration-none">{{ $articles[0]->author->name }}</a>. Tag : <a href="/articles/?tag={{ $articles[0]->tag->slug }}" class="text-decoration-none">{{ $articles[0]->tag->name }}</a> 
                </small>
            </p>
        </div>
    </div>

    {{-- <div>
        {{ $article->links() }}
    </div> --}}
    <p>---------------------------------------------------------------------------------------------------------------------------------------------</p>

    <h1>Artikel Terbaru</h1>
    <div class="container">
        <div class="row">
            @foreach ($articles->skip(1) as $article)            
            <div class="col-md-4 mb-5">
                <div class="card">
                    <img src="https://source.unsplash.com/500x400/?{{ $article->tag->name }}"  class="card-img-top" alt="{{ $article->tag->name }}">
                    <div class="position-absolute top-0 start-0 px-3 py-2 ">
                        <a href="/articles/?tag={{ $article->tag->slug }}" class="text-white text-decoration-none">{{ $article->tag->name }}</a>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">{{ $article->title }}</h2>
                        <p>
                            <small class="text-muted">
                                {{ $article->created_at->diffForHumans() }} <br>
                                Ditulis oleh <a href="/articles/?author={{ $article->author->username }}" class="text-decoration-none">{{ $article->author->name }}</a> 
                            </small>
                        </p>
                    </div>
                </div>
            </div>
            <br>
            @endforeach
        </div>
        <div>
            <button type="button">
                <a href="/articles">Index Artikel</a>
            </button>
        </div>
    </div>
    
@endsection