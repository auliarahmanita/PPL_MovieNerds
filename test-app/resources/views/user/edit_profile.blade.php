@extends('layouts.main') 

@section('container') 
<link rel="stylesheet" href="{{ asset('css/profile-edit.css') }}">
    <section class="editprofile">
        <div class="my-width">
            <div class="title-section"><p>Edit Profile</p> </div>
            <div class="garis-section"></div>

                @if(session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <div class="edit1">
                <div id="imageContainer">
                @if($user->photo)
                            <img src="{{ 'public/storage/photos/'.$user->photo }}">
                        @else
                            <img src="img/profile.jpeg">
                        @endif
                </div>
                        <div class="btn-ganti">
                        <input id="photo" type="file" class="form-control" name="photo">
                        <h4>Ubah Gambar</h4>
                        </div>

                </div>
                   
                    <div class="edit2"> 
                    <div class="sub-title-section"><p>Ubah Profil</p></div>
                        <div class="login-box">
                        <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf

                            <div class="data-login">
                                <label for="name">{{ __('Nama') }}</label>
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="data-login">
                                <label for="username">{{ __('Username') }}</label>
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username">

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="data-login">
                                <label for="email">{{ __('Email Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div> 

                            <div class="data-login">
                                <label for="bio">{{ __('Bio') }}</label>
                                    <!-- <input id="bio" type="textarea" class="form-control @error('bio') is-invalid @enderror" name="bio" value="{{ $user->bio }}" required autocomplete="bio"> -->
                                    <textarea id="bio" type="textarea" name="bio"> {{ old('bio', $user->bio) }}</textarea>

                                    @error('bio')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="data-button">
                                <div class="btn-simpan">
                                    <button type="submit">
                                        {{ __('Simpan') }}
                                    </button>
                                </div>
                            </div>


                            </div>
                        </div>

                        <div class="edit2"> 
                        <div class="sub-title-section"><p>Ubah Password</p></div>
                        <div class="login-box">

                            <div class="data-login">
                                <label for="old_password">{{ __('Password Awal') }}</label>
                                    <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" autocomplete="old-password" placeholder="********">

                                    @error('old_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="data-login">
                                <label for="password">{{ __('Password Baru') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password" placeholder="********">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="data-login">
                                <label for="password-confirm">{{ __('Konfirmasi Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password" placeholder="********">
                            </div>

                            <div class="data-button">
                                <div class="btn-simpan">
                                    <button type="submit">
                                        {{ __('Ubah') }}
                                    </button>
                                </div>
                            </div>

                          </div>
                        </div>
                        </form>
        </div>
    </section>

    <!-- <script>
    function showImage() {
        var fileInput = document.getElementById('photo');
        var file = fileInput.files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
            var imageContainer = document.getElementById('imageContainer');
            imageContainer.innerHTML = '<img src="' + e.target.result + '" alt="Uploaded Image">';
            }

            reader.readAsDataURL(file);
        }
    }

    </script> -->

@endsection