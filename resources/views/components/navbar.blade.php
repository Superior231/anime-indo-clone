<!-- Navbar -->
<nav class="navbar sticky-top navbar-expand-md navbar-light shadow-sm" id="bg-nav">
    <div class="container-fluid px-3">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{ route('index') }}"><img src="{{ url('/assets/img/logo-login.png') }}" alt="" style="width: 40px;" id="logo-nav-hp"></a>
            </li>
        </ul>
        <ul class="navbar-nav logo" id="navNameBrand">
            <li class="nav-item">
                <a href="{{ route('index') }}" class="nav-link"><b class="nav-text text-light">Anime</b> <b class="nav-text-color">Indo</b></a>
            </li>
        </ul>
        <ul class="navbar-nav logo me-3 mt-1" id="search-nav">
            <li class="nav-item search">
                <span class="icon">
                    <i class='bx bx-search text-light' id="nav-search-btn"></i>
                </span>
            </li>
        </ul>
        <ul class="navbar-nav logo mt-1" id="search-box">
            <li class="nav-item search-box px-3">
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search here...">
                <i class='bx bx-x fs-4' id="nav-close-btn"></i>
            </li>
        </ul>


        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-0 ms-auto">
                <li class="nav-item">
                    <div class="content">
                        <div class="pass-logo">
                            <i class='bx bx-search'></i>
                        </div>
                        <input type="search" class="form-control" name="search" id="search" placeholder="Search here..." autocomplete="off">
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav mx-0 me-4 ms-auto my-1" id="dropdown">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center text-light" href="#" id="navbarDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="profile-image">
                            <img class="img" src="{{ !empty(Auth::user()->avatar) ? asset('storage/avatars/'.Auth::user()->avatar) : 'https://ui-avatars.com/api/?background=random&name='. urlencode(Auth::user()->name) }}">
                        </div>
                        <span class="nav-text text-light">&nbsp;{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('akun') }}">My profile</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider-light py-0 my-1">
                        </li>
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
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->