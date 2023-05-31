@extends('layouts.main')

@section('container') 

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-5">{{ $article->title }}</h1>
            <p>By. <a href="/articles/?author={{ $article->author->username }}" class="text-decoration-none">{{ $article->author->name }}</a> in <a href="/articles/?tag={{ $article->tag->slug }}" class="text-decoration-none">{{ $article->tag->name }}</a></p>
            <img src="https://source.unsplash.com/1200x400/?{{ $article->tag->name }}" class="mb-4 img-fluid" alt="{{ $article->tag->name }}">
            {{-- <article class="my-3">
                {!! $article->konten !!}
            </article> --}}
            <article class="my-3">
                <div>
                    {!! $article['konten'] !!}
                </div>
        </article>
            <div class="comments-section">
                <h2>Comments</h2>
                <div class="comment-form">
                    <form action="/comments" method="POST">
                        @csrf
                        <input type="hidden" name="article_id" value="{{ $article->id }}">
                        <input type="hidden" name="parent_comment_id" value="">
                        <div class="form-group">
                            <textarea name="comment_text" class="form-control" rows="3" placeholder="Write a comment..."></textarea>
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
                                        <textarea name="comment_text" class="form-control" rows="3" placeholder="Write a reply..."></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Reply</button>
                                </form>
                            </div> 
                        </li>
                    @endforeach
                </ul>
            </div>
            <a href="/articles" class="d-block mt-3">Back to Articles</a>
        </div>
    </div>
</div>
 

@endsection