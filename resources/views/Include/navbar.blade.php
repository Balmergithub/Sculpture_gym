  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://localhost/beautyandcosmetics/public/">{{ config('app.name', 'Beauty and Cosmetics') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a class="nav-link active" aria-current="page" href="http://localhost/beautyandcosmetics/public/">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="http://localhost/beautyandcosmetics/public/shop">Shop</a></li>         
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="http://localhost/beautyandcosmetics/public/products" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">Products</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Dashboard</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="http://localhost/beautyandcosmetics/public/posts">Blog</a></li> 
              <li class="nav-item"><a class="nav-link" href="http://localhost/beautyandcosmetics/public/about">About</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="http://localhost/beautyandcosmetics/public/posts/create">Create Post</a></li>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">&nbsp &nbsp
                {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
              </form>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
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