@extends('layouts.main')

{{-- @extends(Auth::check() ? 'partials.navbarlogged' : 'layouts.main') --}}

@section('head')
    <link rel="stylesheet" href="{{ asset('css/article.css') }}">
@endsection

@section('container')
    <section class="hotnews">
        <div class="my-width">
            <div class="hotnews-content">
                <a href="{{ url(sprintf('article/%s', $articles[0]->slug)) }}">
                    <img src="https://source.unsplash.com/1000x500/?{{ $articles[0]->tag->name }}"
                        alt="{{ $articles[0]->tag->name }}" style="max-height: 592px !important;">
                    <div class="text-hotnews">
                        <div class="title-hotnews">
                            <h1>{{ $articles[0]->title }}</h1>
                        </div>
                        <div class="waktu-upload">
                            <p>{{ $articles[0]->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </a>
                <div class="penulis-hotnews">
                    <div class="foto-profile">
                        <img src="img/profile-pict.jpg" alt="">
                    </div>
                    <div class="akun-hotnews">
                        <a href="#akun-penulis">
                            <div class="nama-akun">
                                <p>{{ $articles[0]->author->name }}</p>
                            </div>
                        </a>
                        <div class="tier-status">
                            <p>Tier</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    

    <section class="terbaru">
        <div class="my-width">
            <div class="terbaru-content">
                <div class="title-section">
                    <p>Terbaru</p>
                </div>
                <ul>
                    @foreach ($articles->skip(1) as $article)
                        <li>
                            <div class="karesel">
                                <div class="kotak-terbaru">
                                    <a href="{{ url(sprintf('article/%s', $article->slug)) }}">
                                        <img src="https://source.unsplash.com/300x180/?{{ $article->tag->name }}"
                                            alt="">
                                        <div class="text-terbaru">
                                            <div class="title-terbaru">
                                                <h3>{{ $article->title }}</h3>
                                            </div>
                                    </a>
                                    <div class="waktu-upload">
                                        <p>{{ $article->created_at->diffForHumans() }}</p>
                                    </div>
                                    <div class="penulis-terbaru">
                                        <img src="img/profile-pict.jpg" alt="">
                                        <div class="akun-terbaru">
                                            <a href="#akun-penulis">
                                                <div class="nama-akun">
                                                    <p>{{ $article->author->name }}</p>
                                                </div>
                                            </a>
                                            <div class="tier-status">
                                                <p>Tier</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    {{-- button center articles --}}
    <section style="display:flex;justify-content:center;align-items:center;">
        <a href="javascript:;"
            style="box-sizing: border-box;border: 2px solid #FFD233; border-radius: 12px;padding:10px 35px;margin-top:5%;margin-bottom:5%;">
            Index Artikel
        </a>
    </section>
    
@endsection