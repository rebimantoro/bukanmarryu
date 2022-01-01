<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
        <div class="logo">
            <a  class="simple-text logo-normal">
                <div class="logo-image-big">
                    <img src="{{asset('Template/images/logo.png')}}">
                </div>
            </a>
        </div>
        
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class= "@yield('home')">
                    <a href="/admin/home">
                        <i class="fa fa-home"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li class= "@yield('about')">
                    <a href="/admin/about">
                        <i class="fa fa-lock"></i>
                        <p>Admin Management</p>
                    </a>
                </li>
                <li class= "@yield('about')">
                    <a href="/admin/about">
                        <i class="fa fa-users"></i>
                        <p>User Management</p>
                    </a>
                </li>
                <li class= "@yield('products')">
                    <a href="/admin/products">
                        <i class="fa fa-shopping-bag"></i>
                        <p>Product</p>
                    </a>
                </li>
                <li class= "@yield('products')">
                    <a href="/admin/gallery">
                        <i class="fa fa-picture-o"></i>
                        <p>Gallery</p>
                    </a>
                </li>
                <li class= "@yield('products')">
                    <a href="/admin/testimoni">
                        <i class="fa fa-comment-o"></i>
                        <p>Testimoni</p>
                    </a>
                </li>
                <li class= "@yield('about')">
                    <a href="/admin/about">
                        <i class="fa fa-question"></i>
                        <p>About</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel" style="height: 100vh;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>

            <!-- profile -->
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item btn-rotate dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle"></i>
                            <p>
                                <span class="d-lg-none d-md-block">Some Actions</span>
                            </p>
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="admin/profile">Profile</a>
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
                </ul>
            </div>
        </div>
    </nav>

    
    <!-- End Navbar -->