@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <section class="login-sec">
        <div class="my-width">
            <div class="judul-hal">
                <p class="judul">Daftar</p>
                <p class="slogan">Mari bergabung bersama kami untuk mengakses seluruh fitur MovieNerds</p>
            </div>
            <div class="login-box">
                <form action="/register" method="POST">
                    @csrf
                    <div class="data-login">
                        <label for="name">Name</label> <br>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                         
                        @enderror
                        <input type="text" class="form-control rounded-top @error('name')
                            is-invalid
                        @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                    </div>
                    
                    <div class="data-login">
                        <label for="username">Username</label> <br>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                         
                        @enderror
                        <input type="text" class="form-control @error('username')
                            is-invalid
                        @enderror" name="username" id="username" placeholder="Username" required value="{{ old('username') }}">
                    </div>

                    <div class="data-login">
                        <label for="email">Email</label> <br>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                         
                        @enderror
                        <input type="email" class="form-control @error('email')
                            is-invalid
                        @enderror" name="email" id="email" placeholder="name@example.com" required value="{{ old('email') }}">                        
                    </div>

                    <div class="data-login">
                        <label for="password">Password</label> <br>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                         
                        @enderror
                        <input type="password" class="form-control rounded-bottom @error('password')
                            is-invalid
                        @enderror" name="password" id="password" placeholder="Password" required>
                    </div>

                    <div class="data-login">
                        <div class="btn-login">
                            <input type="submit" name="submit" id="submit" value="Register">
                        </div>
                        <div class="non-akun">
                            <p>Sudah punya akun? <a href="/login">Login</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection