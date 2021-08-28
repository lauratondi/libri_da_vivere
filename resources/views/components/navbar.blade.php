<nav class="navbar navbar-expand-lg bg-main  px-3">
  <div class="container-fluid">
    {{-- <a class="navbar-brand text-light" href="#">Navbar</a> --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link  text-sec" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-sec" href="{{route('review.index')}}">Recensioni</a>
        </li>
        @guest
        <li class="nav-item">
          <a class="nav-link text-sec" href="{{route('register')}}">Registrati</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-sec" href="{{route('login')}}">Login</a>
        </li>
        @else 
        {{-- <li class="nav-item">
          <a class="nav-link text-sec" href="{{route('login')}}">Logout</a>
        </li>  --}}
        {{-- <li class="nav-item ">
          <a class="nav-link text-sec" href="{{route('review.create')}}">Scrivi Recensione</a>
        </li> --}}
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-sec" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu bg-main" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-sec" href="{{route('review.create')}}">Scrivi Recensione</a></li>
            <li><a class="dropdown-item text-sec" href="{{route('review.creator')}}">Le tue recensioni</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-sec" href="{{route('logout')}}" onclick="event.preventDefault();
              document.getElementById('form-logout').submit();">Logout <i class="fas fa-power-off ms-5"></i></a></li>
              <form method="POST" action="{{route('logout')}}" id="form-logout">
              @csrf
              </form>
          </ul>
        </li>
        @endguest
      </ul>

    </div>
  </div>
</nav>