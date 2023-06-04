@extends('layouts.main')

@section('head')
    <!-- <link rel="stylesheet" href="{{ asset('css/tierlist.css') }}">   -->
    <!-- <link rel="stylesheet" href="{{ asset('css/article.css') }}"> -->
@endsection

@section('container') 
<link rel="stylesheet" href="{{ asset('css/tierlist.css') }}">  
<section class="peringkat">
        <div class="my-width">
        <div class="title-section"><p>Review Article</p></div>
        <div class="garis-section"></div>
    <div class="article">
    <div class="data-login">
    <label>Title:</label>
    <h1>{{ $article->title }}</h1>
    </div>

    <div class="data-login">
    <label>Author:</label>
    <h1>{{ $article->author->username }}</h1>
    </div>
    
    <div class="data-login">
    <label>Content:</label>
    <h2>{!! $article['konten'] !!}</h2>
    </div>

    <form action="{{ route('admin.review.update', $article->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="data-login">
            <label for="reviewed">Review Status:</label>
            <select name="reviewed" id="reviewed">
                <option value="1">Disetujui</option>
                <option value="-1">Ditolak</option>
            </select>
        </div>
        <div class="container-bawah">
            <div class="btn-kirim">
            <button type="submit">Kirim</button>
            </div>
        </div>
    </form>
    </div>
</div>
</section>
@endsection