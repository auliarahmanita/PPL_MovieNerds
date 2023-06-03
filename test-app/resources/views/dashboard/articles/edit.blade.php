@extends('layouts.main')

@section('container')

<h1>Edit Article</h1>
<div>
    <div>
        <form action="/update/{{$article->slug}}" method="POST" novalidate enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div>
                <div>
                    <label for="title">Title</label>
                    <input id="title" name="title" type="title" value="{{ old('title', $article->title) }}" autofocus>
                    @error('title')<small>{{ $message }}</small>@enderror
                </div>
                <div>
                    <label for="slug">Slug</label>
                    <input id="slug" name="slug" type="text" readonly value="{{ old('slug', $article->slug) }}">
                    @error('slug')<small>{{ $message }}</small>@enderror
                    <small>Auto generate after you filled field title and click tab.</small>
                </div>
                <div class="mb-2">
                    <label for="excerpt">Description</label>
                    <textarea id="excerpt" name="excerpt" type="excerpt">{{ old('excerpt', $article->excerpt) }}</textarea>
                    @error('excerpt')<small>{{ $message }}</small>@enderror
                </div>
                <div class="mb-2">
                    <label for="tag">Tag</label>
                    <select id="tag" name="tag_id" autocomplete="tag-name">
                        @foreach($tags as $tag)
                        @if( old('tag_id', $article->tag_id) == $tag->id)
                        <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @else
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>

                <div class="mb-2">
                    <label for="image">Image</label>
                    <input type="hidden" name="old-image" value="{{ $article->image }}">
                    @if($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" alt="">
                    @else
                    <img id="img-preview" alt="">
                    @endif
                    <input id="image" name="image" type="file" onchange="previewImage();">
                    @error('image')<small>{{ $message }}</small>@enderror
                </div>

            </div>
            <div>
                <label for="konten">Content</label>
                <textarea id="konten" type="textarea" name="konten"> {{ old('konten', $article->konten) }}"</textarea>
                {{-- <textarea input="body"></textarea> --}}
                @error('konten')<small>{{ $message }}</small>@enderror
            </div>

            <div>
                <button type="submit">
                    Update Post
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');

    titleInput.addEventListener('input', function() {
        const title = this.value;
        const slug = slugify(title);
        slugInput.value = slug;
    });

    function slugify(text) {
        return text.toString().toLowerCase()
            .replace(/\s+/g, '-')       // Mengganti spasi dengan tanda hubung
            .replace(/[^\w\-]+/g, '')   // Menghapus karakter non-alphanumeric kecuali tanda hubung
            .replace(/\-\-+/g, '-')     // Mengganti beberapa tanda hubung berturut-turut dengan satu tanda hubung
            .replace(/^-+/, '')         // Menghapus tanda hubung di awal teks
            .replace(/-+$/, '');        // Menghapus tanda hubung di akhir teks
    }
</script>
@endsection