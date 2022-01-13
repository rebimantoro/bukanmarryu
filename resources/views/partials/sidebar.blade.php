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
                <li class= "@yield('user')">
                    <a href="/admin/user_management">
                        <i class="fa fa-users"></i>
                        <p>User Management</p>
                    </a>
                </li>
                <li class= "@yield('products')">
                    <a href="/admin/product">
                        <i class="fa fa-shopping-bag"></i>
                        <p>Product</p>
                    </a>
                </li>
                <li class= "@yield('gallery')">
                    <a href="/admin/gallery">
                        <i class="fa fa-picture-o"></i>
                        <p>Gallery</p>
                    </a>
                </li>
                <li class= "@yield('testimoni')">
                    <a href="/admin/testimoni">
                        <i class="fa fa-comment-o"></i>
                        <p>Testimoni</p>
                    </a>
                </li>

                <li class= "@yield('logout')">
                    <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                               <i class="fa fa-sign-out"></i> {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel" style="height: 100vh;">
