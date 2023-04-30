<!-- Navbar -->
<section id="nav">
  <nav class="navbar fixed-top bg-white navbar-expand-md navbar-light shadow">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        <!-- <img src="#" style="width: 100px;"> -->
        {{ config('', 'RPL') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-light" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto ">
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
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Keluar') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
      @endguest
    </ul>
  </div>
</div>
</nav>
</section>