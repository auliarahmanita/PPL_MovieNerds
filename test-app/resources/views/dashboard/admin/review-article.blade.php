@extends('layouts.main') 

@section('container') 

    <h1>Review Article</h1>

    <h2>Title: {{ $article->title }}</h2>
    <p>Author: {{ $article->author->username }}</p>
    <p>Content: {{ $article->konten }}</p>

    <form action="{{ route('admin.review.update', $article->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div>
            <label for="reviewed">Review Status:</label>
            <select name="reviewed" id="reviewed">
                <option value="1">Approve</option>
                <option value="-1">Reject</option>
            </select>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

@endsection