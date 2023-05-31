@extends('layouts.main') 

@section('container') 

    <h1>Review List</h1>

    @if (count($articles) > 0)
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->author->username }}</td>
                        <td>
                            <a href="{{ route('admin.review.article', $article->id) }}">Review</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No posts to review.</p>
    @endif

@endsection