<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    @include('components.style')

</head>

<body>

    <!-- Sidebar -->
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image_1 ms-2">
                    <a href="{{ route('index') }}"><img src="assets/img/logo-login.png" alt="logo" style="width: 50px;" class="logo" id="logoSide"></a>
                </span>

                <div class="text header-text">
                    <span class="name"> &nbsp; <b class="text-light">Anime</b> <b class="nav-text-color">Indo</b></span>
                </div>
            </div>

            <i class='bx bx-chevron-left toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li>
                        <a href="{{ url('/') }}" class="side-link {{ $active === 'home' ? 'active' : '' }}" title="Home">
                            <i class='bx bxs-home icon'></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('jadwal_tayang') }}" class="side-link {{ $active === 'jadwal-tayang' ? 'active' : '' }}" title="Jadwal Tayang">
                            <i class='bx bxs-calendar icon'></i>
                            <span class="text nav-text">Jadwal Tayang</span>
                        </a>
                    </li>
                    <li>
                        <a href="katalog-anime.html" class="side-link {{ $active === 'katalog-anime' ? 'active' : '' }}" title="Katalog Anime">
                            <i class='bx bx-list-ul icon'></i>
                            <span class="text nav-text">Katalog Anime</span>
                        </a>
                    </li>
                    <li>
                        <a href="riwayat-menonton.html" class="side-link {{ $active === 'riwayat-menonton' ? 'active' : '' }}" title="Riwayat Menonton">
                            <i class='bx bx-history icon'></i>
                            <span class="text nav-text">Riwayat Menonton</span>
                        </a>
                    </li>
                    <li>
                        <a href="subscribed-anime.html" class="side-link {{ $active === 'subscribed-anime' ? 'active' : '' }}" title="Subscribed Anime">
                            <i class='bx bxs-bell icon'></i>
                            <span class="text nav-text">Subscribed Anime</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content position-absolute bottom-0 mb-2">
                <li class="account">
                    <a href="#" title="Pengaturan">
                        <i class='bx bxs-cog icon'></i>
                        <span class="text nav-text">Pengaturan</span>
                        <i class='bx bx-chevron-right icon text nav-text mx-auto me-0'></i>
                    </a>
                </li>
            </div>
        </div>
    </nav>
    <!-- Sidebar End -->


    @yield('content')


    <!-- Nav Bottom -->
    <nav class="nav-bottom fixed-bottom">
        <ul>
            <li class="list {{ $active === 'home' ? 'active' : '' }}">
                <a href="{{ route('index') }}" title="Home">
                    <span class="icon">
                        <i class='bx bxs-home icon'></i>
                    </span>
                </a>
            </li>
            <li class="list {{ $active === 'jadwal-tayang' ? 'active' : '' }}">
                <a href="{{ route('jadwal_tayang') }}" title="Jadwal Tayang">
                    <span class="icon">
                        <i class='bx bxs-calendar icon'></i>
                    </span>
                </a>
            </li>
            <li class="list {{ $active === 'katalog-anime' ? 'active' : '' }}">
                <a href="katalog-anime.html" title="Katalog Anime">
                    <span class="icon">
                        <i class='bx bx-list-ul icon'></i>
                    </span>
                </a>
            </li>
            <li class="list {{ $active === 'riwayat-menonton' ? 'active' : '' }}">
                <a href="riwayat-menonton.html" title="Riwayat Menonton">
                    <span class="icon">
                        <i class='bx bx-history icon'></i>
                    </span>
                </a>
            </li>
            <li class="list {{ $active === 'subscribed-anime' ? 'active' : '' }}">
                <a href="subscribed-anime.html" title="Subscribed Anime">
                    <span class="icon">
                        <i class='bx bxs-bell icon'></i>
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- Nav Bottom End -->


    @include('components.script')


</body>

</html>