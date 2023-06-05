@extends('layouts.main')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/discussion.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://kit.fontawesome.com/7c4f2372d8.js" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('container')
    <section class="discuss">
        <div class="my-width">
            <div class="content">

                <form class="add-discuss" action="{{ route('create.post') }}" method="post">
                    @auth
                    @csrf
                    <div class="akun owner">
                        <img src="img/profile.jpeg" alt="" />
                    </div>

                    <input type="text" placeholder="Ask Here... What Are You Curious About?" style="margin-right:10px;"
                        name="content" />

                    <button type="submit" value="Create Post"
                        style="display:flex;justify-content:center;background-color:#505050;padding:10px;border-radius:15px;gap:10px;cursor:pointer;border:none;min-width:70px;margin-right:10px;">
                        Kirim
                    </button>
                    @endauth
                </form>

                @forelse($posts as $key => $post)
                    <div class="add-discuss">
                        <div class="akun">
                            <img src="img/profile.jpeg" alt="" />
                            <p>{{ $post->username }}</p>
                        </div>
                        <div class="wrap-isi">
                            <p class="isi-discuss">
                                {{ $post->content }}
                            </p>
                            <p class="tanggal-discuss">Ditanyakan pada 21 Maret</p>

                            <button type="button"
                                style="display:flex;justify-content:center;background-color:#505050;padding:10px;border-radius:15px;gap:10px;cursor:pointer;border:none;margin-top:3%;min-width:70px;"
                                onclick="showComments(`#container-comment-{{ $post->id }}`)">
                                <i class="fa-solid fa-message"></i>
                                <span>{{ $post->replies->count() }}</span>
                            </button>



                            <div id="container-comment-{{ $post->id }}" style="display: none;">
                                <form class="add-discuss" style="margin-bottom: 10px;margin-top:10px;padding:0;"
                                    action="{{ route('create.reply', $post->id) }}" method="post">
                                    @csrf
                                    <input type="text" placeholder="Ask Here... What Are You Curious About?"
                                        style="width: 100%;margin-right:10px;" name="content" />
                                    <button type="submit" value="reply"
                                        style="display:flex;justify-content:center;background-color:#505050;padding:10px;border-radius:15px;gap:10px;cursor:pointer;border:none;min-width:70px;margin-right:10px;">
                                        Kirim
                                    </button>
                                </form>

                                @forelse($post->replies as $key => $reply)
                                    <div
                                        style="background-color:#505050;width:100%;min-height:100px;margin-top:10px;border-radius:5px;padding:10px;">

                                        <div style="display: flex;flex-direction:column;">
                                            <div style="display: flex;justify-content:space-between;">
                                                <div class="akun">
                                                    <img src="img/profile.jpeg" alt=""
                                                        style="margin-left: unset;" />
                                                    <p>{{ $reply->username }}</p>
                                                </div>
                                                <p>
                                                    {{ $reply->created_at->locale('id')->isoFormat('DD MMMM YYYY') }}
                                                </p>
                                            </div>
                                            <span style="margin-top: 2%;">{{ $reply->content }}</span>
                                        </div>
                                    </div>
                                @empty
                                    <div
                                        style="display: flex;justify-content:center;align-items:center;background-color:#505050;width:100%;min-height:100px;margin-top:10px;border-radius:5px;padding:10px;">
                                        <p>Belum ada komentar</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <script>
        const showComments = elementID => {
            let display = $(elementID).css('display');

            if (display === 'none') {
                $(elementID).slideDown();
            } else {
                $(elementID).slideUp();
            }
        }
    </script>
@endsection
