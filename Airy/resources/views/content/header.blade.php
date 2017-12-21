<style media="screen">
  #title{
    margin-left: 20px;
  }
</style>
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper blue lighten-3">
        <a href="{{ url('/home') }}" class="brand-logo" id="title">Airy</a>
        <ul class="right hide-on-med-and-down">
          @guest
            <li><a href="{{ route('login') }}">Masuk</a></li>
            <li><a href="{{ route('register') }}">Daftar</a></li>
          @else
            <li><a href="{{ route('donate.index') }}">Donasi</a></li>
            <li><a href="{{ route('case.index') }}">Kasus</a></li>
            <li><a href="{{ route('logout') }}">Keluar</a></li>
          @endguest
        </ul>
      </div>
    </nav>
  </div>
