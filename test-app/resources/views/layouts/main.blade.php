<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>MovieNerds</title>
    @yield('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('js/coba.js') }}">

    @yield('styles')
</head>

<body>
    <nav class="navbar">
        <div class="my-width" style="max-width: 1600px;">
            <div class="logo">
                <a href="/landing"><img src="img/logo-longversion.jpg" alt=""></a>
            </div>
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
                    {{-- <li>
                        <div style="display:flex;margin-left: 10%;" class="dropdown">
                            <div style="display:flex; align-items:center;">
                                <a href="javascript:;" onclick="showDropdownProfile()" class="dropbtn">
                                    jakasembung24
                                </a>
                            </div>
                            <div style="margin-left:15%;">
                                <img src="{{ asset('img/profile-pict.jpg') }}" alt=""
                                    style="max-width: 45px; border-radius: 90px;">
                            </div>

                            <div class="dropdown-content"
                                style="display:none; position: absolute; width: 244px; height: 156px; left: 1391px; top: 76px; background: #616161; box-shadow: 0px 0px 2px 2px rgba(255, 255, 255, 0.3); border-radius: 10px;">
                                <a href="javascript:;"
                                    style="display:flex; align-items:center;padding:10px;margin-left:0;border-bottom: 1px solid #000">
                                    <img src="{{ asset('img/icons/write.svg') }}" alt="">
                                    <span style="margin-left:15px;">Tulis Artikel</span>
                                </a>
                                <a href="javascript:;"
                                    style="display:flex; align-items:center;padding:10px;margin-left:0;border-bottom: 1px solid #000">
                                    <img src="{{ asset('img/icons/user.svg') }}" alt="">
                                    <span style="margin-left:15px;">Profil</span>
                                </a>
                                <a href="{{ url('logout') }}"
                                    style="display:flex; align-items:center;padding:10px;margin-left:0;">
                                    <img src="{{ asset('img/icons/logout.svg') }}" alt="">
                                    <span style="margin-left:15px;">Keluar</span>
                                </a>
                            </div>
                        </div>
                    </li> --}}
                    <li>
                        <div
                            style="justify-content: center;
                        display: flex;
                        align-items: center;
                        gap: 10px;margin-left: 100px;">
                            <div class="hamburger-menu" onclick="toggleDropdown()">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
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

{{-- Main Content --}}
@yield('container')

<footer>
    <div class="my-width">
        <div class="footer-box">
            <div class="text-footer">
                <a href="#ketentuan">Syarat dan Ketentuan</a>
                <p class="pemisah"> | </p>
                <a href="#ikuti">Ikuti Kami</a>
                <p class="pemisah"> | </p>
                <a href="about">About</a>
            </div>
            <div class="copyright">
                <p>Copyright © 2023 MovieNerds</p>
            </div>

        </div>
    </div>
</footer>

{{-- Jquery --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

{{-- Dropdown user profile in navbar --}}
<script>
    function showDropdownProfile() {
        let currentDisplay = $('.dropdown-content').css('display');

        if (currentDisplay === 'none') {
            $('.dropdown-content').css('display', 'grid')
        } else {
            $('.dropdown-content').css('display', 'none')
        }

    }

    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            $('.dropdown-content').css('display', 'none')
        }
    }
</script>
</body>

</html>
