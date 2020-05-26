<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('course.index' )}}">eLearner</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse flex-grow-1" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Cart</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ route('profile') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          User
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          @if (Auth::check())
            <a class="dropdown-item" href="#">My Cources</a>
            <a class="dropdown-item" href="{{ route('profile') }}">Profile</a> 
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout' )}}">logout</a>

            @else

            <a class="dropdown-item" href="{{ route('signup') }}">Sign Up</a>
            <a class="dropdown-item" href="{{ route('signin') }}">Sign In</a>
          @endif
          
        </div>
      </li>
    </ul>
  </div>
</nav>

