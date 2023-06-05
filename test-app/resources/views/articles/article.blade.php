@extends('layouts.main')

{{-- @extends(Auth::check() ? 'partials.navbarlogged' : 'layouts.main') --}}

@section('head')
    <link rel="stylesheet" href="{{ asset('css/article.css') }}">
@endsection

{{-- Page Styles --}}
@section('styles')
    <script src="https://kit.fontawesome.com/7c4f2372d8.js" crossorigin="anonymous"></script>
@endsection

@section('container') 
    <section class="hotnews">
        <div class="my-width">
            <div class="hotnews-content">
                <div class="text-hotnews">
                    <div class="title-hotnews">
                        <h1>{{ $article->title }}</h1>
                    </div>
                    <div class="cont2">
                        <div class="penulis-hotnews">
                            <div class="foto-profile">
                                @if($article->user && $article->user->photo)
                                    <img src="{{ asset('storage/photos/'.$article->user->photo) }}">
                                @else
                                    <img src="{{ asset('img/profile.jpeg') }}">
                                @endif
                                {{-- <img src="{{ 'public/storage/photos/'.$article->user->photo }}" alt=""> --}}
                            </div>
                            <div class="detail-penulisan">
                                <div class="akun-hotnews">
                                    <a href="/api/articles/?author={{ $article->author->username }}" >
                                        <div class="nama-akun">
                                            <p>{{ $article->author->name }}</p>
                                        </div>
                                    </a>
                                    <div class="tier-status">
                                        <p>{{ $article->author->tier->tier_name }}</p>
                                    </div>
                                </div>
                                <div class="waktu-upload">
                                    <p>{{ $article->created_at->isoFormat('DD MMMM YYYY, HH:MM') }} WIB</p>
                                </div>
                            </div>
                        </div>
                        <div class="share">
                            <div class="share-icon">
                                <i class="fa-brands fa-facebook-f"></i>
                            </div>
                            <div class="share-icon">
                                <i class="fa-brands fa-twitter"></i>
                            </div>
                            <div class="share-icon">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="share-icon">
                                <i class="fas fa-light fa-link"></i>
                            </div>
                            <div class="total-share">
                                <p>Share</p>
                                <p>18</p>
                            </div>
                            <div class="love">
                                @php
                                    $articleLikesDislikes = \App\Models\ArticleLikesDislikes::where('article_id', $article->id)->first();
                                    $likes = $articleLikesDislikes ? $articleLikesDislikes->likes : 0;
                                    $dislikes = $articleLikesDislikes ? $articleLikesDislikes->dislikes : 0;
                                @endphp
                                <form action="{{ route('articles.like', $article) }}" method="POST" class="d-inline">
                                    @csrf
                                    <i type="submit" class="fa-sharp fa-regular fa-heart"></i>
                                </form>
                                <p>{{ $likes }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- @if($article->photo)
                    <img src="{{ 'public/storage/photo/'.$article->photo }}">
                @else
                    <img src="https://source.unsplash.com/500x400/?{{ $article->tag->name }}" class="mb-4 img-fluid" alt="{{ $article->tag->name }}">
                @endif --}}
                
                @if($article->photo)
                    <img src="{{ '/public/storage/photo/'.$article->photo }}">
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $article->tag->name }}" class="mb-4 img-fluid" alt="{{ $article->tag->name }}">
                @endif

                <div class="isi-article">
                    {!! $article->konten !!}
                </div>
                <a href="/api/articles" class="d-block mt-3">Back to Articles</a>
                <div class="comments-section">
                    <h2>Comments</h2>
                    <div class="comment-form">
                        <form action="/comments" method="POST">
                            @csrf
                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                            <input type="hidden" name="parent_comment_id" value="">
                            <div class="form-group">
                                <textarea name="comment_text" class="form-control" rows="3" placeholder="Write a comment..." spellcheck="false"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Comment</button>
                        </form>
                    </div>
                    
                    <ul>
                        @foreach ($article->comments as $comment)
                            <li>
                                <div class="comment">
                                    <p>{{ $comment->comment_text }}</p>
                                    {{-- <p>By: {{ $comment->user->name }}</p> --}}
                                </div>
                                @if ($comment->replies->count() > 0)
                                    <ul>
                                        @foreach ($comment->replies as $reply)
                                            <li>
                                                <div class="comment reply">
                                                    <p>{{ $reply->comment_text }}</p>
                                                    {{-- <p>By: {{ $reply->user->name }}</p> --}}
                                                    {{--  --}}
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                                <div class="reply-form">
                                    <form action="/comments" method="POST">
                                        @csrf
                                        <input type="hidden" name="article_id" value="{{ $article->id }}">
                                        <input type="hidden" name="parent_comment_id" value="{{ $comment->id }}">
                                        <div class="form-group">
                                            <textarea name="comment_text" class="form-control" rows="3" placeholder="Write a reply..." spellcheck="false"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Reply</button>
                                    </form>
                                </div> 
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection