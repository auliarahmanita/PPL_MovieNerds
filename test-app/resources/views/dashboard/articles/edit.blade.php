@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/article-make.css') }}">
<script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
<section class="makearticle">
<div class="my-width">
<div class="title-section"><p>Edit Artikel</p> </div>
<div class="garis-section"></div>

<div>
    <div>
        <form action="/update/{{$article->slug}}" method="POST" novalidate enctype="multipart/form-data">
            @method('PATCH')
            @csrf
            <div>
            <div class="make1">
            <div class="login-box">
            <div class="data-login">
                    <label for="title">Title</label>
                    <input id="title" name="title" type="title" value="{{ old('title', $article->title) }}" autofocus>
                    @error('title')<small>{{ $message }}</small>@enderror
            </div>

            <div class="data-login">
                <label for="konten">Content</label>
                <textarea id="konten" type="textarea" name="konten"> {{ old('konten', $article->konten) }}</textarea>
                {{-- <textarea input="body"></textarea> --}}
                @error('konten')<small>{{ $message }}</small>@enderror
            </div>
                </div>
            </div>

            <div class="make2">
            <div class="login-box">
            
                <div class="data-login">
                    <label for="slug">Slug</label>
                    <input id="slug" name="slug" type="text" readonly value="{{ old('slug', $article->slug) }}">
                    @error('slug')<small>{{ $message }}</small>@enderror
                    <!-- <small>Auto generate after you filled field title and click tab.</small> -->
                </div>

                <div class="data-login">
                    <label for="excerpt">Description</label>
                    <input id="excerpt" name="excerpt" type="excerpt" value="{{ old('excerpt', $article->excerpt) }}">
                    @error('excerpt')<small>{{ $message }}</small>@enderror
                </div>

                <div class="data-login">
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

                <div class="data-login">
                    <label for="photo">Image</label>
                    <input type="hidden" name="old-photo" value="{{ $article->photo }}">
                    @if($article->photo)
                    <img src="{{ 'public/storage/photo/'.$article->photo }}" alt="">
                    @else
                    <img id="photo-preview" alt="">
                    @endif
                    <input id="photo" name="photo" type="file" onchange="previewImage();">
                    @error('photo')<small>{{ $message }}</small>@enderror
                </div>
            </div>
            </div>
            <!-- </div> -->
            

            <div class="container-bawah">
            <div class="btn-kirim">
                <button type="submit">
                    Update Artikel
                </button>
            </div>
            </div>
        </form>
    </div>
</div>
</div>
</section>

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

    tinymce.init({
        selector: '#konten',
        width: 480,
        height: 265,
        branding : false,
        resize : false,
        menubar: false,
        plugins: 'lists, link, fullscreen, visualblocks', 
        //plugins: 'quickbars',
        toolbar: 'undo redo h1 h2 bold italic bullist numlist outdent indent link fullscreen' ,
        // toolbar_mode: 'wrap'
        skin:'alus'
        
    }); 
</script>
@endsection