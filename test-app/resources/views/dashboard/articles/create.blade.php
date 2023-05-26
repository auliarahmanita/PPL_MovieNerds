@extends('layouts.main')

@section('container') 

<h1 class="text-3xl font-black text-center md:text-left mb-5">Buat Artikel</h1>
<div class="min-h-full">
    <div class="max-w-full w-full space-y-8">
        <form class="space-y-6" action="/dashboard/articles" method="POST" novalidate enctype="multipart/form-data">
            @csrf
            <div class="rounded-md max-w-lg">
                <div class="mb-2">
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
                    <input id="title" name="title" type="text" autocomplete="title" class="focus:ring-indigo-500 focus:border-indigo-500 p-3 flex-1 block w-full rounded-md sm:text-sm border-gray-300 border" value="{{ old('title') }}" autofocus>
                    @error('title')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                </div>
                <div class="mb-2">
                    <label for="slug" class="block text-sm font-medium text-gray-700 mb-2">Slug</label>
                    <input id="slug" name="slug" type="text" readonly autocomplete="slug" class="p-3 flex-1 block w-full rounded-md sm:text-sm border-gray-300 border bg-gray-100" value="{{ old('slug') }}">
                    @error('slug')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                    <small class="text-gray-500 font-medium block my-2">Auto generate after you filled field title and click tab.</small>
                </div>
                <div class="mb-2">
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                    <textarea id="description" name="description" type="description" autocomplete="description" class="focus:ring-indigo-500 focus:border-indigo-500 p-3 flex-1 block w-full rounded-md sm:text-sm border-gray-300 border">{{ old('excerpt') }}</textarea>
                    @error('description')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                </div>
                <div class="mb-2">
                    <label for="tag" class="block text-sm font-medium text-gray-700 mb-2">Tag</label>
                    <select id="tag" name="tag_id" autocomplete="tag-name" class="focus:ring-indigo-500 focus:border-indigo-500 p-3 flex-1 block w-full rounded-md sm:text-sm border-gray-300 border">
                        @foreach($tags as $tag)
                        @if( old('tag_id') == $tag->id)
                        <option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @else
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                <div class="mb-2">
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Image</label>
                    <img class="rounded-md border border-gray-200 hidden mb-3 overflow-hidden" id="img-preview" alt="">
                    <input id="image" name="image" type="file" class="focus:ring-indigo-500 focus:border-indigo-500 p-3 flex-1 block w-full rounded-md sm:text-sm border-gray-300 border" onchange="previewImage();">
                    @error('image')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
                </div>
            </div>
            <div>
                <label for="konten" class="block text-sm font-medium text-gray-700 mb-2">Konten</label>
                <input id="konten" type="textarea" name="konten" value="{{ old('konten') }}">
                <trix-editor input="konten"></trix-editor>
                @error('konten')<small class="text-red-600 font-medium block my-2">{{ $message }}</small>@enderror
            </div>

            <div>
                <button type="submit" class="group relative flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Buat Artikel
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');

    // title.addEventListener('input', async function() {
    //     const res = await fetch(`/dashboard/articles/slug?${new URLSearchParams({title: this.value}).toString()}`);
    //     const data = await res.json();
    //     slug.value = data.slug;
    // });

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