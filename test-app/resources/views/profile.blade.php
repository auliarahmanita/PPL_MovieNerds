@extends('layouts.main')

@section('container') 

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="col-md-4">
                    @if($user->photo)
                        <img src="{{ asset('storage/photos/'.$user->photo) }}" class="img-thumbnail rounded mx-auto d-block">
                    @else
                        <img src="{{ asset('img/profile.png') }}" class="img-thumbnail rounded mx-auto d-block">
                    @endif
                </div>
                <h1 class="mb-5">{{$user->username}}</h1>
                <p class="mb-5">{{$user->bio}}</p>
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Semua</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Draft</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Disetujui</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ditolak</th>
                            </tr>
                        </thead>
                        {{-- <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($posts as $post)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $post->title }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-indigo-800">{{ $post->category->name }}</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium space-x-2">
                                    <a href="/dashboard/posts/{{ $post->slug }}" class="text-indigo-600 hover:text-indigo-900">Detail</a>
                                    <a href="/dashboard/posts/{{ $post->slug }}/edit" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <form action="/dashboard/posts/{{ $post->slug }}" class="inline-block" method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button onclick="return confirm('Are you sure to delete this post?')" class="text-red-600 hover:text-red-900">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                </div>
                    <p>----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                    <div class="card">
                        <div class="card-header">{{ __('Update Profile') }}</div>
        
                        <div class="card-body">
                            
                            @if(session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
        
                            <div class="row">
                                <div class="col-md-4">
                                    @if($user->photo)
                                        <img src="{{ asset('storage/photos/'.$user->photo) }}" class="img-thumbnail rounded mx-auto d-block">
                                    @else
                                        <img src="{{ asset('img/profile.png') }}" class="img-thumbnail rounded mx-auto d-block">
                                    @endif
                                    
                                </div>
                                <div class="col-md-8">
                                    <form method="POST" action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
        
                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
        
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name">
        
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
    
                                        <div class="row mb-3">
                                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>
        
                                            <div class="col-md-6">
                                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required autocomplete="username">
        
                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="row mb-3">
                                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
        
                                            <div class="col-md-6">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">
        
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="row mb-3">
                                            <label for="old_password" class="col-md-4 col-form-label text-md-end">{{ __('Old Password') }}</label>
        
                                            <div class="col-md-6">
                                                <input id="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" name="old_password" autocomplete="old-password">
        
                                                @error('old_password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="row mb-3">
                                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('New Password') }}</label>
        
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
        
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="row mb-3">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
        
                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                                            </div>
                                        </div>
    
                                        <div class="row mb-3">
                                            <label for="bio" class="col-md-4 col-form-label text-md-end">{{ __('Bio') }}</label>
        
                                            <div class="col-md-6">
                                                <input id="bio" type="textarea" class="form-control @error('bio') is-invalid @enderror" name="bio" value="{{ $user->bio }}" required autocomplete="bio">
        
                                                @error('bio')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
        
                                        <div class="row mb-3">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Change Profile Photo') }}</label>
        
                                            <div class="col-md-6">
                                                <input id="photo" type="file" class="form-control" name="photo">
                                            </div>
                                        </div>
        
                                        <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Update Profile') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
        
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- <a href="/edit_profile" class="d-block mt-3">Edit profil</a> --}}
            </div>
        </div>
    </div>  

@endsection