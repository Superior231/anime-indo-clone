@extends('layouts.index', [
    'title' => 'Anime Indo',
    'active' => 'home'
])

@section('content')
<section class="home">
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-md navbar-light shadow-sm" id="bg-nav">
        <div class="container-fluid px-3">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href=""><img src="{{ url('/assets/img/logo-login.png') }}" alt="" style="width: 40px;" id="logo-nav-hp"></a>
                </li>
            </ul>
            <ul class="navbar-nav logo" id="navNameBrand">
                <li class="nav-item">
                    <a href="" class="nav-link"><b class="nav-text text-light">Anime</b> <b style="color: #2196f3;">Indo</b></a>
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
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img class="img" src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->name }}" width="26px" style="border-radius: 50%;">
                            <span class="nav-text text-light">&nbsp;{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">My profile</a></li>
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

    <div class="banner">
        <img src="{{ url('/assets/img/solofeast.webp') }}" width="100%" alt="banner">
    </div>

    <div class="banner-mobile">
        <img src="{{ url('/assets/img/solofeast.webp') }}" width="100%" alt="banner" class="mt-5">
    </div>

    <!-- Home -->
    <div class="container-home">
        <div class="energy mx-0 ms-auto">
            <span class="text-light"><i class="fa-solid fa-bolt-lightning text-primary"></i>&nbsp; 1 / 2</span>
        </div>

        <!-- User Info -->
        <div class="profile d-flex justify-content-between mt-5">
            <div class="row d-flex">
                <div class="col d-flex gap-3 w-100">
                    <div class="profile-image">
                        <img class="img" src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->name }}" width="50px" style="border-radius: 50%;">
                    </div>
                    <div class="user-info d-flex flex-column">
                        <span class="text-secondary fs-6">Welcome,</span>
                        <span class="text-light fs-6">{{ Auth::user()->name }}</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex align-items-center">
                    <a href="#" title="Pengaturan">
                        <i class='bx bxs-cog icon fs-2 text-primary'></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- User Info End -->

        <!-- Premium Card -->
        <div class="row row-cols-2 d-flex align-items-center mt-4 mx-0" id="price">
            <a href="#" class="col d-flex flex-column text-decoration-none">
                <span class="text-primary fw-bold"><i class="fa-solid fa-gem"></i>&nbsp; Premium</span>
                <span class="text-light">Capek liat iklan?</span>
                <span class="text-light">Ayo Beli Premium</span>
            </a>
            <a href="#" class="col d-flex flex-column text-decoration-none">
                <span class="text-light">Harga mulai dari 12 ribu</span>
                <span class="text-light">Tekan disini!</span>
            </a>
        </div>
        <!-- Premium Card End -->

        <!-- Tabs -->
        <nav class="tabs d-flex justify-content-center mt-2">
            <ul class="links">
                <li>
                    <a href="" class="active">Anime</a>
                </li>
                <li>
                    <a href="">Berita</a>
                </li>
                <li>
                    <a href="">Musik</a>
                </li>
            </ul>
        </nav>
        <!-- Tabs End -->

        <!-- Recent -->
        <div class="recent-container mt-2 mb-3">
            <a href="#" class="recent w-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="gambar">
                        <img src="{{ url('/assets/img/mashle-s2.webp') }}" alt="gambar">
                    </div>
                    <div class="recent-text">
                        <h5 class="text-primary text-size fw-bold">Terakhir Ditonton</h5>
                        <h5 class="text-light text-size fw-normal">Mashle Season 2</h5>
                    </div>
                </div>
                <div class="play-btn d-flex justify-content-end">
                    <i class='bx bx-play fs-3 text-light'></i>
                </div>
            </a>
        </div>
        <!-- Recent End -->

        <!-- Action -->
        <div class="action">
            <div class="actions d-flex justify-content-between align-items-center">
                <div class="title d-flex gap-1 mt-3">
                    <h3 class="text-light text-size fw-bold">Episode Terbaru</h3>
                    <a href=""><i class="fa-solid fa-rotate-right fs-4 mt-0 mt-lg-1"></i></a>
                </div>
                <a href="jadwal-tayang.html" class="lihat-jadwal text-decoration-none d-flex align-items-center gap-1">
                    <span class="text-light text-size fw-bold">Lihat Jadwal</span>
                    <i class="fa-solid fa-chevron-right text-light"></i>
                </a>
            </div>
        </div>
        <!-- Action End -->

        <!-- Anime Content -->
        <div class="anime-content py-0 py-lg-3">
            <div class="row row-cols-3 row-cols-lg-5 g-2 g-lg-3">

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="{{ url('/assets/img/bucchigiri.webp') }}" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.13</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 8</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 3.9k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Bucchigiri?!</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="{{ url('/assets/img/mashle-s2.webp') }}" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.65</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 9</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 15.5k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Mashle Season 2</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="{{ url('/assets/img/solo-leveling.webp') }}" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>8.26</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 9</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 34.5k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Solo Leveling</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/ragna-crimson.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.27</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 21</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 11.1k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Ragna Crimson</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/undead-unluck.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.62</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 22</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 18.5k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Undead Unluck</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/nozomanu-fushi-no-boukensha.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.5</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 10</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 76.6k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Nozomanu Fushi no Boukensha</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/dungeon-meshi.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.71</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 10</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 13.0k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Dungeon Meshi</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/shangri-la-frontier.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.77</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 22</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 88.6k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Shangri-La Frontier</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/kusuriya-no-hitorigoto.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>8.47</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 22</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 69.4k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Kusuriya no Hitorigoto</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/boku-no-kokoro-no-yabai-yatsu-season-2.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>8.8</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 10</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 129.7k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Boku no Kokoro no Yabai Yatsu Season 2</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/saikyou-tank-no-meikyuu-kouryaku.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>6.3</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 10</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 49.2k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Saikyou Tank no Meikyuu Kouryaku</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/sousou-no-frieren.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>8.89</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 26</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 86.8k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Sousou no Frieren</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Anime Content End -->


        <!-- Action -->
        <div class="title d-flex gap-1 mt-3 mb-2">
            <h3 class="text-light text-size fw-bold my-0">Sedang Populer</h3>
        </div>
        <!-- Action End -->
        
        <!-- Sedang Populer -->
        <div class="anime-populer py-0 py-lg-3">
            <div class="row anime-content d-flex justify-content-center g-2 g-lg-3">
                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/mashle-s2.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header d-flex justify-content-end">
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.65</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 9</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 168.0k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Mashle Season 2</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/solo-leveling.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header d-flex justify-content-end">
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.13</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 9</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 604.5k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Solo Leveling</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/my-instant-death-ability-is-overpowered.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header d-flex justify-content-end">
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>6.3</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 10</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 316.1k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Sokushi Cheat ga Saikyou Sugite</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/bucchigiri.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.13</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 8</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 3.9k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Bucchigiri?!</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/bucchigiri.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.13</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 8</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 3.9k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Bucchigiri?!</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/bucchigiri.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.13</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 8</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 3.9k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Bucchigiri?!</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/bucchigiri.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.13</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 8</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 3.9k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Bucchigiri?!</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/bucchigiri.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.13</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 8</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 3.9k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Bucchigiri?!</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/bucchigiri.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.13</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 8</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 3.9k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Bucchigiri?!</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/bucchigiri.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header">
                                <span class="update-info">New</span>
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.13</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 8</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 3.9k</span>
                            <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i> <b>Rame</b></span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Bucchigiri?!</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Sedang Populer End -->


        <!-- Action -->
        <div class="title d-flex justify-content-between align-items-center mt-3 mb-2">
            <h3 class="text-light text-size fw-bold my-0">Anime Tamat</h3>
            <a href="jadwal-tayang.html" class="lihat-jadwal text-decoration-none d-flex align-items-center gap-1">
                <span class="text-light text-size fw-bold">Lihat Semua</span>
                <i class="fa-solid fa-chevron-right text-light"></i>
            </a>
        </div>
        <!-- Action End -->

        <!-- Anime Tamat -->
        <div class="anime-tamat py-0 py-lg-3">
            <div class="row anime-content d-flex justify-content-center g-2 g-lg-3">
                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/i-want-to-eat-your-pancreas.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header d-flex justify-content-end">
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>8.55</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 1</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 238.0k</span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Kimi no Suizou wo Tabetai</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/koe-no-katachi.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header d-flex justify-content-end">
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>8.93</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 1</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 305.9k</span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Koe no Katachi</h4>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card text-white" style="background-color: transparent;">
                        <img src="/assets/img/kimi-no-na-wa.webp" class="card-img" alt="anime">
                        <div class="card-img-overlay px-0 py-0">
                            <div class="header d-flex justify-content-end">
                                <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>8.84</span>
                            </div>
                            <div class="footer">
                                <span class="episode-info">Eps 1</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-2 mt-lg-3">
                        <div class="view-info text-light my-1 my-lg-2">
                            <span><i class="fa-regular fa-eye"></i> 387.3k</span>
                        </div>
                        <div class="card-title text-light">
                            <h4 class="anime-title">Kimi no Na wa.</h4>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Anime Tamat End -->

    </div>
    <!-- Home End -->

</section>
@endsection