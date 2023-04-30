<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('includes.styles')
</head>
<body>
    @yield('css')

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                         <a href="/" class="@if(Request::is('/','/*')) active @endif nav-link">Beranda</a>
                     </li>
                     <li class="nav-item">
                         <a href="/galeri" class="@if(Request::is('galeri','galeri*')) active @endif nav-link">Galeri</a>
                     </li>
                     <li class="nav-item">
                         <a href="/tentang_kami" class="@if(Request::is('tentang_kami','tentang_kami*')) active @endif nav-link">Tentang Kami</a>
                     </li>
                     <li class="nav-item">
                         <a href="/kontak" class="@if(Request::is('kontak','kontak*')) active @endif nav-link">Hubungi Kami</a>
                     </li>  
                     @if (Route::has('register'))
                     @endif
                     @else
                     <li class="nav-item">
                      <a href="/" class="@if(Request::is('/','/*')) active @endif nav-link">Beranda</a>
                  </li>
                  <li class="nav-item">
                      <a href="/galeri" class="@if(Request::is('galeri','galeri*')) active @endif nav-link">Galeri</a>
                  </li>
                  <li class="nav-item">
                      <a href="/tentang_kami" class="@if(Request::is('tentang_kami','tentang_kami*')) active @endif nav-link">Tentang Kami</a>
                  </li>
                  <li class="nav-item">
                      <a href="/kontak" class="@if(Request::is('kontak','kontak*')) active @endif nav-link">Hubungi Kami</a>
                  </li>

                  @endguest
              </ul>
          </div>
      </div>
  </nav>

  <div class="spacer3"></div>
  <main class="py-4">
    @yield('content')
</main>
</div>

<div class="spacer"></div>
@include('includes.footer')
@include('includes.script')
</body>
</html>
