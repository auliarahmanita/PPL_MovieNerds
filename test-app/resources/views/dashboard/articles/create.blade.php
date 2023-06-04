@extends('layouts.main')


@section('container') 
<link rel="stylesheet" href="{{ asset('css/article-make.css') }}">
<script src="{{ asset('tinymce/tinymce.min.js') }}"></script>
<section class="makearticle">
    <div class="my-width">

    <div class="title-section"><p>Buat Artikel</p> </div>
    <div class="garis-section"></div>
<div>
    <div>
        <form class="space-y-6" action="/store" method="POST" novalidate enctype="multipart/form-data" class="form-login">
            @csrf
            <div class="make1">
                <div class="login-box">
                    <div class="data-login">
                        <label for="title">Title</label>
                        <input id="title" name="title" type="text">
                        @error('title')<small>{{ $message }}</small>@enderror
                    </div>
                
                    <div class="data-login">
                        <label for="konten">Konten</label>
                        <!-- <input id="konten" type="textarea" name="konten"> -->
                        <textarea id="konten" name="konten" type="excerpt" rows="16" cols="30"></textarea> 
                        @error('konten')<small>{{ $message }}</small>@enderror
                    </div>
                </div>
            </div>

            <div class="make2">
                <div class="login-box">
            
                    <div class="data-login">
                        <label for="slug">Slug</label>
                        <input id="slug" name="slug" type="text" readonly>
                        @error('slug')<small>{{ $message }}</small>@enderror
                        <!-- <small>Auto generate after you filled field title and click tab.</small> -->
                    </div>
            
                    <div class="data-login">
                        <label for="excerpt">Description</label>
                        <input id="excerpt" name="excerpt" type="excerpt"></textarea>
                        @error('excerpt')<small>{{ $message }}</small>@enderror
                    </div>
            
                </div>
                    <div class="data-login">
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
                    <div class="data-login">
                        <label for="photo">Image</label>
                        <img id="photo-preview" alt="">
                        <input id="photo" name="photo" type="file" class="image-button" value="" onchange="previewImage(); ">
                        @error('photo')<small>{{ $message }}</small>@enderror
                    </div>

                </div>

                <div class="container-bawah">
                    <div class="btn-kirim">
                        <button type="submit">
                            Buat Artikel
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