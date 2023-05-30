<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MovieNerds</title>
</head>
<body>
    <nav>
        <a href="/">Movie Nerds</a>
        <button type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
        </button>
        <div>
          <ul>
            <li>
              <a href="/home">Beranda</a>
            </li>
            <li>
              <a href="/discussion">Diskusi</a>
            </li>
            <li>
              <a href="/tier">Peringkat</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" href="/tags">Tag</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="/about">Tentang Kami</a>
            </li>
          </ul>
        </div>
        <div class="row justify-content-center mb-3">
          <div class="col-md-6">
              <form action="/articles">
                  @if (request('tag'))
                      <input type="hidden" name="tag" value="{{ request('tag') }}">
                  @endif
                  @if (request('author'))
                      <input type="hidden" name="author" value="{{ request('author') }}">
                  @endif  
                  <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                      <button class="btn btn-danger" type="submit" >Search</button>
                  </div>
              </form>
          </div>
        </div>

        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
          @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
          @endif
          
          @else
            <li class="nav-item dropdown">
              <button>
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
              </a>
              </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/create">Buat Artikel</a>
                  
                  @can('admin')
                  <a href="/admin/review">Review Article</a>
                  @endcan

                  <a class="dropdown-item" href="/profile">Profil</a>
                  <form action="" method="post">
                    @csrf
                    <a href="/logout">Logout</a>
                  </form>
                </div>
            </li>
          @endguest
      </nav>
</body>

<footer>
  <ul>
    <li>
      <a href="">Syarat dan ketentuan</a>
    </li>
    <li>
      <a href="">Ikuti Kami</a>
    </li>
    <li>
      <a href="/about">about</a>
    </li>
  </ul>
</footer>

<div class="container">
  @yield('container')
</div>

</html>