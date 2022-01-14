<nav class="navbar navbar-expand-lg custom_nav-container ">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img width="250" src="{{asset('Template/images/logo.png')}}" alt="#" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>  
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <li class="nav-item @yield('home')">
                    <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                    
                <li class="nav-item @yield('products')">
                    <a class="nav-link" href="/products">Products</a>
                </li>
                
                <li class="nav-item @yield('gallery')">
                    <a class="nav-link" href="/gallery">Gallery</a>
                </li>

                <li class="nav-item @yield('contact')">
                    <a class="nav-link" href="/contact">About</a>
                </li>

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="/profile/{{ Auth::user()->id }}" class="dropdown-item">Profile</a>
                            <a href="/cart/{{ Auth::user()->id }}" class="dropdown-item">Cart</a>
                            <a href="/booking/{{ Auth::user()->id }}" class="dropdown-item">My Booking</a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>