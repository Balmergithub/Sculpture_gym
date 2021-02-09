        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
          <div class="container">
            <a class="navbar-brand" href="http://localhost/sculpture_gym/public/">SCULPTURE CLASSIC</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://localhost/sculpture_gym/public/">HOME</a></li>
              <li class="nav-item"><a class="nav-link" href="http://localhost/sculpture_gym/public/about">ABOUT</a></li>
              <li class="nav-item"><a class="nav-link" href="http://localhost/sculpture_gym/public/schedule" >SCHEDULE</a></li>
              <li class="nav-item"><a class="nav-link" href="http://localhost/sculpture_gym/public/gallery">GALLERY</a></li>   
              <li class="nav-item"><a class="nav-link" href="http://localhost/sculpture_gym/public/posts">BLOGS</a></li>              
              <li class="nav-item"><a class="nav-link" href="http://localhost/sculpture_gym/public/contacts">CONTACTS</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item "><a class="nav-link nav-login" href="http://localhost/sculpture_gym/public/posts/create">Create Post</a></li>
    
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item nav-login">
                            <a class="nav-link nav-login" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                    
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <li>
                            <a class="dropdown-item" href="{{ route('logout') }}">Dashboard</a>
                          </li>
                          <li><hr class="dropdown-divider"></li>
                          <li>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                  </form>
                          </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>