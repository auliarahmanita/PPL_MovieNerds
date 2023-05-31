@extends('layouts.main')

@section('container') 

<h1>Buat Artikel</h1> 
<div>
    <div>
        <form class="space-y-6" action="/store" method="POST" novalidate enctype="multipart/form-data">
            @csrf
            <div>
                <div>
                    <label for="title">Title</label>
                    <input id="title" name="title" type="text">
                    @error('title')<small>{{ $message }}</small>@enderror
                </div>
                <div>
                    <label for="slug">Slug</label>
                    <input id="slug" name="slug" type="text" readonly>
                    @error('slug')<small>{{ $message }}</small>@enderror
                    <small>Auto generate after you filled field title and click tab.</small>
                </div>
                <div>
                    <label for="excerpt">Description</label>
                    <textarea id="excerpt" name="excerpt" type="excerpt"></textarea>
                    @error('excerpt')<small>{{ $message }}</small>@enderror
                </div>
                <div>
                    <label for="tag">Tag</label>
                    <select id="tag" name="tag_id">
                        @foreach($tags as $tag)
                        @if( old('tag_id') == $tag->id)
                        <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @else
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="image">Image</label>
                    <img id="img-preview" alt="">
                    <input id="image" name="image" type="file" onchange="previewImage();">
                    @error('image')<small>{{ $message }}</small>@enderror
                </div>
            </div>
            <div>
                <label for="konten">Konten</label>
                <input id="konten" type="textarea" name="konten">
                {{-- <textarea id="konten" name="konten" type="excerpt"></textarea> --}}
                @error('konten')<small>{{ $message }}</small>@enderror
            </div>

            <div>
                <button type="submit">
                    Buat Artikel
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