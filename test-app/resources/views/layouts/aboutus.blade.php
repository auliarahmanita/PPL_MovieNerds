<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/about-us.css">
    <title>MovieNerds</title>
</head>
<body>

  <nav class="navbar"> 
    <div class="my-width">
        <div class="logo">
          <a href="/landing"><img src="img/logo-longversion.jpg" alt=""></a></div>
          <ul class="menu">
            <li><a href="/home" class="menu-btn">Beranda</a></li>
            <li><a href="/discussion" class="menu-btn">Discussion</a></li>
            <li><a href="/tier" class="menu-btn">Peringkat</a></li>
            <li><a href="/about" class="menu-btn">About Us</a></li>
            <li class="search-box">
                <form action="/api/articles">
                    @if (request('tag'))
                        <input type="hidden" name="tag" value="{{ request('tag') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search Here..." name="search"
                            value="{{ request('search') }}">
                        <!-- <button class="btn-search" type="submit" >Search</button> -->
                    </div>
                </form>
            </li>
            @guest
                <li><a href="{{ url('login') }}" class="menu-btn">Sign in</a></li>
                <li><a href="/register" class="btn-signup">
                        <input type="button" value="Sign Up">
                    </a></li>
            @else
                <li>
                    <div
                        style="justify-content: center;
                        display: flex;
                        align-items: center;
                        gap: 10px">
                        <div onclick="toggleDropdown()">
                            <p style="display: flex; align-items: center; margin-left: 10px">               
                                {{ auth()->user()->username }}
                                @if (auth()->user()->photo)
                                    <img src="{{ asset('/public/storage/photos/' . auth()->user()->photo) }}" alt="" style="max-width: 45px; height: 45px; border-radius: 50%; margin-left: 10px; border: 2px solid #505050">
                                @else
                                    <img src="img/profile.jpeg" alt="" style="max-width: 45px; border-radius: 50%;">
                                @endif
                            </p>
                        </div>
                    </div>
                    <!-- Dropdown menu -->
                    <div class="dropdown" id="dropdown-menu">
                        @guest
                            <a href="{{ route('login') }}">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @else
                            <a href="/create">Buat Artikel</a>

                            @can('admin')
                                <a href="/admin/review-list">Review Article</a>
                            @endcan

                            <a href="/profile">Profil</a>
                            <form action="" method="post">
                                @csrf
                                <a href="/logout">Logout</a>
                            </form>
                        @endguest
                    </div>
                    <script>
                        function toggleDropdown() {
                            var dropdownMenu = document.getElementById("dropdown-menu");
                            dropdownMenu.style.display = (dropdownMenu.style.display === "block") ? "none" : "block";
                        }
                    </script>
                </li>
            @endguest
        </ul>
    </div>
</nav>
</body>

<div class="container">
  @yield('container')
</div>

<footer>
  <div class="my-width">
      <div class="footer-box">
          <div class="text-footer">
              <a href="">Syarat dan Ketentuan</a>
              <p class="pemisah"> | </p>
              <a href="">Ikuti Kami</a>
              <p class="pemisah"> | </p>
              <a href="/about">About</a>
          </div>
          <div class="copyright">
              <p>Copyright © 2023 MovieNerds</p>
          </div>
          
      </div>
  </div>
</footer>


</html>