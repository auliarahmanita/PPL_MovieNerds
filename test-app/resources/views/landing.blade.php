@extends('layouts.land')

@section('container')
    {{-- <h1>Landing page</h1> --}}

    <section class="landing">
        <div class="my-width">
          <div class="content">
            <p class="tagline">
              Bicarakan apa yang kamu pikirkan mengenai tontonanmu dan diskusikan
              dengan yang lainnya.
            </p>
            <a class="daftar-landing" href="/register" style="display: block; height: 100%; width: 100%; text-decoration: none; color: inherit;">
                <button type="button">
                    Daftar
                </button>
            </a>
            
          </div>
        </div>
      </section>
      <section class="landing-desc">
        <div class="my-width">
          <div class="content">
            <p class="txt-desc">
              MovieNerds adalah suatu platform online bagi penggemar film yang
              memungkinkan penggunanya untuk berdiskusi dan bertukar informasi
              mengenai film dalam bentuk forum. Aplikasi ini juga memiliki fitur
              artikel yang dapat dibaca oleh pengguna untuk menambah informasi dan
              wawasan mengenai perfilman.
            </p>
          </div>
        </div>
      </section>
@endsection