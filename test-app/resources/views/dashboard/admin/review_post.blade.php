@extends('layouts.main') 

@section('container') 

    <h1>Review Post</h1>

    <h2>Title: {{ $article->title }}</h2>
    <p>Author: {{ $article->author }}</p>
    <p>Content: {{ $article->konten }}</p>

    <form action="{{ route('admin.review.update', $article->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div>
            <label for="status">Review Status:</label>
            <select name="status" id="status">
                <option value="1">Approve</option>
                <option value="-1">Reject</option>
            </select>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>

@endsection