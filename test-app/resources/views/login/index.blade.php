@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif      
    
    @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
    @endif    
    
    <section class="login-sec">
        <div class="my-width">
            <div class="judul-hal">
                <p class="judul">Masuk</p>
                <p class="slogan">Masuk ke akunmu untuk dapat mengakses seluruh fitur MovieNerds</p>
            </div>
            <div class="login-box">
                <form action="/login" method="POST">
                    @csrf
                
                    <div class="data-login">
                        <label for="email">Email </label> <br>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                         
                        @enderror
                        <input type="email" name="email" class="form-control @error('email')
                            is-invalid
                        @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <p>*Gunakan email yang valid*</p>
                    </div>

                    <div class="data-login">
                        <label for="password">Password </label> <br>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>                         
                        @enderror
                        <input type="password" name="password" class="form-control @error('password')
                            is-invalid
                        @enderror" id="password" placeholder="Password" required ">                        
                    </div>
                
                    <div class="data-login">
                        <div class="btn-login">
                            <input type="submit" name="submit" id="submit" value="Masuk">
                        </div>
                        <div class="non-akun">
                            <p>Belum Punya Akun? <a href="/register">Register Now!</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
            
            
    </section>
@endsection