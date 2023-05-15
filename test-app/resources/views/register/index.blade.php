@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5" >
            <main class="form-registration">
                <form action="/register" method="POST">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                    
                    <div class="form-floating">
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
                    
                    <div class="form-floating">
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

                    <div class="form-floating">
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

                    <div class="form-floating">
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
                
                    <button class="w-100 btn btn-lg btn-primary btn-danger mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-2">Sudah punya akun? <a href="/login">Login</a></small>
            </main>
        </div>
    </div>
@endsection