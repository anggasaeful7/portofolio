<!-- <ul class="navbar">
    @foreach($navbar as $name => $url)
        {{ $slot }}
    @endforeach
</ul> -->
<nav class="navbar navbar-expand-lg navbar-light bg-info bg-gradient border-bottom me-2">
  <div class="container">
    <a class="navbar-brand" href="#">Practice</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    @foreach($navbar as $name => $url)
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{$url}}">{{$name}}</a>
        </li>
      </ul>
      @endforeach

      <ul class="navbar-nav mb-2 mb-lg-0">
        @guest
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('register') }}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ route('login') }}">Login</a>
          </li>
          
        @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->username }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="{{ route('logout') }}" method="post">
                  @csrf
                <button type="submit" class="dropdown-item">Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>