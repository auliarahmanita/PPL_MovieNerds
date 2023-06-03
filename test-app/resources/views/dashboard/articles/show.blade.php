@extends('layouts.main')

@section('container')
<div class="max-w-4xl mx-auto py-10 px-6 rounded-lg bg-white shadow-md shadow-slate-200">
    <a href="/dashboard/articles" class="text-indigo-600 font-bold block mb-4">Back to My Posts</a>

    <div class="my-5 rounded-sm overflow-hidden">
        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}'
        s image">
    </div>

    <h1 class="text-gray-900 font-black text-4xl mb-5 block leading-snug">{{ $article->title }}</h1>
    <div>
        <div>
            <span class="text-indigo-600 font-bold inline-block">
                <a href="/articles?categories={{ $article->tag->slug }}">{{ $article->tag->name }}</a>
            </span>
            ~
            <span class="text-gray-500 inline-block text-sm">{{ $article->created_at->format('M, d Y h:i A') }}</span>
            ~
            <div class="space-x-2 inline-block">
                <a href="/dashboard/articles/{{ $article->slug }}/edit" class="text-indigo-600">Edit</a>
                <form action="/dashboard/articles/{{ $article->slug }}" class="inline-block" method="post">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Are you sure to delete this post?')" class="text-red-600 hover:text-red-900">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <div class="my-20"></div>
    <div class="body-post text-base text-gray-800 leading-relaxed font-serif">
        {!! $article->body !!}
    </div>
</div>
@endsection