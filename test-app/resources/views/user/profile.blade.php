@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/article.css') }}">
@endsection

@section('container')

    <style>
        input[type="range"]:disabled {
            background-color: rgb(74, 123, 197);
        }

        input[type="range"]::-webkit-slider-thumb {
            display: none;
        }

        .active-tab-status-artikel {
            background-color: #FFD233;
            border-radius: 15px;
            padding: 5px;
            color: #000;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <section class="editprofile"> 
        <div class="my-width">
            <div style="display: flex;">
                @if ($user->photo)
                    <img src="{{ asset('/public/storage/photos/' . $user->photo) }}" alt=""
                        style="width: 150px;
                    height: 150px;
                    border-radius: 50%;">
                @else
                    <img src="img/profile.jpeg" alt=""
                        style="width: 150px;
                height: 150px;
                border-radius: 50%;">
                @endif

                <div style="display: flex;justify-content:center;margin-left:3%;flex-direction:column;">
                    <div style="display: flex;">
                        <p style="font-size: 36px;">{{ $user->username }}</p>
                        <small style="font-size: 15px;margin-top:5%;margin-left:2%;">{{ $user->tier->tier_name }}</small>
                    </div>
                    <p style="color:#BEBEBE;margin-top:3%;">{{ $user->articles()->count() }} Artikel </p>
                    <p style="margin-top:6%;">{{ $user->bio }}</p>
                </div>

                <div style="margin-left:auto;margin-top:5%;min-width: 235px;">
                    <p style="text-align: center;">{{ $user->tier->tier_name }}</p>
                    <div style="display: flex;padding:5px; background-color:#272727;width:100%;border-radius:15px;">
                        <span>
                            Poin
                        </span>
                        <input type="range" value="80" style="margin-left: 2%;margin-right: 2%;" id="range-poin"
                            disabled>
                        <span>
                            Exp : {{ $user->exp }}/100
                        </span>
                    </div>

                    <div style="text-align: right;text-align: right; margin-top: 13%; margin-bottom: 40px;">
                        <a href="/edit_profile" style="padding: 10px;background-color:#FFD233;color:black;border-radius:10px;">
                            Edit Profile
                        </a>
                    </div>
                </div>
            </div>
                <a href="javascript:;" style="font-size:25px;margin-left:1%;border-bottom: 3px solid #FFD233;">Artikel</a>
                <div class="garis-section"></div>
    </section>


    <section class="terbaru">
        @if ($articles->count() != 0)
            <div class="my-width">
                <div class="terbaru-content" style="border-top:none;margin-top: 25px;margin-bottom: 5%;">
                    <ul>
                        @foreach ($articles as $article)
                            @if ($article->user_id == auth()->user()->id)

                            <li>
                                <div class="karesel">
                                    <div class="kotak-terbaru">
                                        <a href="{{ url(sprintf('article/%s', $article->slug)) }}">
                                            @if($article->photo)
                                                <img src="{{ asset('storage/photo/'.$article->photo) }}">
                                            @else
                                                <img src="https://source.unsplash.com/300x180/?{{ $article->tag->name }}" alt="">
                                            @endif
                                            {{-- <img src="https://source.unsplash.com/300x180/?{{ $article->tag->name }}" alt=""> --}}
                                            <div class="text-terbaru">
                                                <div class="title-terbaru">
                                                    <h3>{{ $article->title }}</h3>
                                                </div>
                                        </a>
                                            <div class="waktu-upload">
                                                <p>{{ $article->created_at->diffForHumans() }}</p>
                                            </div>
                                            <div class="penulis-terbaru">
                                                @if ($user->photo)
                                                    <img src="{{ asset('/public/storage/photos/' . $user->photo) }}" alt="">
                                                @else
                                                    <img src="img/profile.jpeg" alt="">
                                                @endif
                                                <div class="akun-terbaru">
                                                    <a href="{{ route('profile.index', [$article->author->id]) }}">
                                                        <div class="nama-akun"
                                                            style="margin-top: 0;
                                                            margin-bottom: 0;
                                                            font-style: unset;">
                                                            <p>{{ $article->author->name }}</p>
                                                        </div>
                                                    </a>
                                                    <div class="tier-status">
                                                        <p>{{ $article->author->tier->tier_name }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <a href="javascript:;"
                                                onclick="showAction(`#action-article-{{ $article->id }}`)">
                                                <img src="{{ asset('img/icons/three-dot.svg') }}" alt=""
                                                    style="height:20px;">
                                            </a>
                                            <div style="display:none;background-color: #616161;padding:10px;flex-direction:column;border-radius:10px;gap:10px;position: absolute;"
                                                id="action-article-{{ $article->id }}">
                                                <a href="/dashboard/articles/{{ $article->slug }}/edit">Edit</a>
                                                <form style="cursor: pointer;" action="/dashboard/articles/{{ $article->id}}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <a onclick="return confirm('Are you sure to delete this post?')">Hapus</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif


        @if ($articles->count() == 0)
            <div class="my-width" style="min-height:340px;display:flex;justify-content:center;align-items:center;">
                <h4>Belum ada artikel</h4>
            </div>
        @endif
    </section>


    {{-- script --}}
    <script>
        const showAction = (elementID) => {
            let element = $(elementID);
            let display = element.css('display');

            if (display === 'none') {
                element.css('display', 'flex')
            } else {
                element.css('display', 'none')
            }
        }
    </script>
@endsection