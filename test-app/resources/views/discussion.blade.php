@extends('layouts.main')

@section('container')
    {{-- <h1>Landing page</h1> --}}

    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis earum ratione nemo esse at. Fugit officiis aliquid eveniet debitis at dolores tenetur consequuntur, odit nam illum sunt suscipit culpa corrupti.</p>
    </div>

    <h1>Discussion</h1>

    @auth
    <h2>Create Post</h2>
    <form action="{{ route('create.post') }}" method="post">
        @csrf
        <label for="username">Username:</label>
        <input type="text" name="username">
        <br>
        <label for="content">Content:</label>
        <textarea name="content"></textarea>
        <br>
        <input type="submit" value="Create Post">
    </form>
    @endauth

    <hr>

    <h2>Posts</h2>
    @foreach ($posts as $post)
        <div>
            <p>------------------------------------------------------------------</p>
            <p><strong>{{ $post->username }}</strong></p>
            <p>{{ $post->content }}</p>
            <p>{{ $post->created_at->format('D, d M Y H:i A') }}</p>

            <h4>Replies</h4>
            @foreach ($post->replies as $reply)
                <div>
                    <p><strong>{{ $reply->username }}</strong></p>
                    <p>{{ $reply->content }}</p>
                    <p>{{ $reply->created_at->format('D, d M Y H:i A') }}</p>
                </div>
            @endforeach

            <hr>

            @auth
            <h5>Reply</h5>
            <form action="{{ route('create.reply', $post->id) }}" method="post">
                @csrf
                <label for="username">Username:</label>
                <input type="text" name="username">
                <br>
                <label for="content">Content:</label>
                <textarea name="content"></textarea>
                <br>
                <input type="submit" value="Reply">
            </form>
            @endauth
        </div>
    @endforeach
@endsection