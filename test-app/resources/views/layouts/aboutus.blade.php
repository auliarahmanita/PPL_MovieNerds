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

              <form action="/articles">
                @if (request('tag'))
                    <input type="hidden" name="tag" value="{{ request('tag') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif  
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search Here..." name="search" value="{{ request('search') }}">
                    <button class="btn-search" type="submit" >Search</button>
                </div>
            </form>
            </li>  

            <li>
              <div class="hamburger-menu" onclick="toggleDropdown()">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
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


            {{-- <li>
              <div class="hamburger-menu" onclick="toggleDropdown()">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
              </div>
              <!-- Dropdown menu -->
              <div class="dropdown" id="dropdown-menu">
                  <a href="#">Link 1</a>
                  <a href="#">Link 2</a>
                  <a href="#">Link 3</a>
              </div>
          </li> --}}
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