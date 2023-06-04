@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/tierlist.css') }}">  
    <!-- <link rel="stylesheet" href="{{ asset('css/article.css') }}"> -->
@endsection

@section('container') 

<section class="peringkat">
        <div class="my-width">
        <div class="title-section"><p>Review List</p></div>
        <div class="garis-section"></div>


        <div class="karesel">
        <div class="table-wrapper">
    @if (count($articles) > 0)
        <table class="fl-table">
            <thead>
                <tr>
                    <th style="text-align: left">Title</th>
                    <th>Author</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td style="text-align: left;">{{ $article->title }}</td>
                        <td>{{ $article->author->username }}</td>
                        <td>
                            <!-- <a href="{{ route('admin.review.article', $article->id) }}">Review</a> -->
                            <!-- <div style="text-align: right;text-align: right; margin-top: 13%; margin-bottom: 40px;"> -->
                            <a href="{{ route('admin.review.article', $article->id) }}" style="padding: 5px;background-color:#FFD233;color:black;border-radius:5px;">
                            Review
                        </a>
                    <!-- </div> -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No posts to review.</p>
    @endif
    </div>
    </div>
</div>
</section>
@endsection