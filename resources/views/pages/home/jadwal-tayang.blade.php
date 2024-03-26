@extends('layouts.main')

@section('content')
    <section class="jadwal-tayang">
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
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img class="img" src="https://ui-avatars.com/api/?background=random&name={{ Auth::user()->name }}" width="26px" style="border-radius: 50%;">
                                <span class="nav-text text-light">&nbsp;{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end"
                                aria-labelledby="navbarDropdownMenuLink">
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

        <div class="title-jadwal-tayang d-flex align-items-center justify-content-center gap-1">
            <i class='bx bxs-calendar text-light fs-2 icon'></i>
            <h2 class="text-light text-size text-center my-0 fs-2">Jadwal Tayang</h2>
        </div>

        <!-- Content -->
        <div class="container-jadwal-tayang pb-5">
            <!-- Anime Content -->
            <div class="anime-content">
                <!-- Minggu -->
                <div class="row row-cols-1 py-3">
                    <div class="col mb-2">
                        <section class="title d-flex align-items-center gap-1" id="minggu">
                            <h3 class="text-light text-size">Minggu</h3>
                            <span class="text-size text-secondary mb-1">( 15 Anime )</span>
                        </section>
                    </div>

                    <div class="col">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-2 g-lg-3">
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
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
                                    </div>
                                    <div class="card-title text-light">
                                        <h4 class="anime-title">Bucchigiri?!</h4>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="col text-decoration-none">
                                <div class="card text-white" style="background-color: transparent;">
                                    <img src="/assets/img/mashle-s2.webp" class="card-img" alt="anime">
                                    <div class="card-img-overlay px-0 py-0">
                                        <div class="header">
                                            <span class="update-info">New</span>
                                            <span class="rate text-light"><i
                                                    class="fa-solid fa-star fa-xs"></i>7.65</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 15.5k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
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
                                        <div class="header">
                                            <span class="update-info">New</span>
                                            <span class="rate text-light"><i
                                                    class="fa-solid fa-star fa-xs"></i>8.26</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 34.5k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
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
                                            <span class="rate text-light"><i
                                                    class="fa-solid fa-star fa-xs"></i>7.27</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 21</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 11.1k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
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
                                            <span class="rate text-light"><i
                                                    class="fa-solid fa-star fa-xs"></i>7.62</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 22</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 18.5k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
                                    </div>
                                    <div class="card-title text-light">
                                        <h4 class="anime-title">Undead Unluck</h4>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="col text-decoration-none">
                                <div class="card text-white" style="background-color: transparent;">
                                    <img src="/assets/img/nozomanu-fushi-no-boukensha.webp" class="card-img"
                                        alt="anime">
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
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
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
                                            <span class="rate text-light"><i
                                                    class="fa-solid fa-star fa-xs"></i>7.71</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 10</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 13.0k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
                                    </div>
                                    <div class="card-title text-light">
                                        <h4 class="anime-title">Dungeon Meshi</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Senin -->
                <div class="row row-cols-1 py-3">
                    <div class="col mb-2">
                        <section class="title d-flex align-items-center gap-1" id="senin">
                            <h3 class="text-light text-size">Senin</h3>
                            <span class="text-size text-secondary mb-1">( 2 Anime )</span>
                        </section>
                    </div>

                    <div class="col">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-2 g-lg-3">
                            <a href="#" class="col text-decoration-none">
                                <div class="card text-white" style="background-color: transparent;">
                                    <img src="/assets/img/high-card-season-2.webp" class="card-img" alt="anime">
                                    <div class="card-img-overlay px-0 py-0">
                                        <div class="header">
                                            <span class="update-info">New</span>
                                            <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.2</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 20.8k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
                                    </div>
                                    <div class="card-title text-light">
                                        <h4 class="anime-title">High Card Season 2</h4>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="col text-decoration-none">
                                <div class="card text-white" style="background-color: transparent;">
                                    <img src="/assets/img/nanatsu-no-taizai-mokushiroku-no-yonkishi.webp" class="card-img"
                                        alt="anime">
                                    <div class="card-img-overlay px-0 py-0">
                                        <div class="header">
                                            <span class="update-info">New</span>
                                            <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.2</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 21</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 108.8k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
                                    </div>
                                    <div class="card-title text-light">
                                        <h4 class="anime-title">Nanatsu no Taizai: Mokushiroku no Yonkishi</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Selasa -->
                <div class="row row-cols-1 py-3">
                    <div class="col mb-2">
                        <section class="title d-flex align-items-center gap-1" id="selasa">
                            <h3 class="text-light text-size">Selasa</h3>
                            <span class="text-size text-secondary mb-1">( 2 Anime )</span>
                        </section>
                    </div>

                    <div class="col">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-2 g-lg-3">
                            <a href="#" class="col text-decoration-none">
                                <div class="card text-white" style="background-color: transparent;">
                                    <img src="/assets/img/high-card-season-2.webp" class="card-img" alt="anime">
                                    <div class="card-img-overlay px-0 py-0">
                                        <div class="header">
                                            <span class="update-info">New</span>
                                            <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.2</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 20.8k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
                                    </div>
                                    <div class="card-title text-light">
                                        <h4 class="anime-title">High Card Season 2</h4>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="col text-decoration-none">
                                <div class="card text-white" style="background-color: transparent;">
                                    <img src="/assets/img/nanatsu-no-taizai-mokushiroku-no-yonkishi.webp" class="card-img"
                                        alt="anime">
                                    <div class="card-img-overlay px-0 py-0">
                                        <div class="header">
                                            <span class="update-info">New</span>
                                            <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.2</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 21</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 108.8k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
                                    </div>
                                    <div class="card-title text-light">
                                        <h4 class="anime-title">Nanatsu no Taizai: Mokushiroku no Yonkishi</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Rabu -->
                <div class="row row-cols-1 py-3">
                    <div class="col mb-2">
                        <section class="title d-flex align-items-center gap-1" id="rabu">
                            <h3 class="text-light text-size">Rabu</h3>
                            <span class="text-size text-secondary mb-1">( 2 Anime )</span>
                        </section>
                    </div>

                    <div class="col">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-2 g-lg-3">
                            <a href="#" class="col text-decoration-none">
                                <div class="card text-white" style="background-color: transparent;">
                                    <img src="/assets/img/high-card-season-2.webp" class="card-img" alt="anime">
                                    <div class="card-img-overlay px-0 py-0">
                                        <div class="header">
                                            <span class="update-info">New</span>
                                            <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.2</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 20.8k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
                                    </div>
                                    <div class="card-title text-light">
                                        <h4 class="anime-title">High Card Season 2</h4>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="col text-decoration-none">
                                <div class="card text-white" style="background-color: transparent;">
                                    <img src="/assets/img/nanatsu-no-taizai-mokushiroku-no-yonkishi.webp" class="card-img"
                                        alt="anime">
                                    <div class="card-img-overlay px-0 py-0">
                                        <div class="header">
                                            <span class="update-info">New</span>
                                            <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.2</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 21</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 108.8k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
                                    </div>
                                    <div class="card-title text-light">
                                        <h4 class="anime-title">Nanatsu no Taizai: Mokushiroku no Yonkishi</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Kamis -->
                <div class="row row-cols-1 py-3">
                    <div class="col mb-2">
                        <section class="title d-flex align-items-center gap-1" id="kamis">
                            <h3 class="text-light text-size">Kamis</h3>
                            <span class="text-size text-secondary mb-1">( 2 Anime )</span>
                        </section>
                    </div>

                    <div class="col">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-2 g-lg-3">
                            <a href="#" class="col text-decoration-none">
                                <div class="card text-white" style="background-color: transparent;">
                                    <img src="/assets/img/high-card-season-2.webp" class="card-img" alt="anime">
                                    <div class="card-img-overlay px-0 py-0">
                                        <div class="header">
                                            <span class="update-info">New</span>
                                            <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.2</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 20.8k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
                                    </div>
                                    <div class="card-title text-light">
                                        <h4 class="anime-title">High Card Season 2</h4>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="col text-decoration-none">
                                <div class="card text-white" style="background-color: transparent;">
                                    <img src="/assets/img/nanatsu-no-taizai-mokushiroku-no-yonkishi.webp" class="card-img"
                                        alt="anime">
                                    <div class="card-img-overlay px-0 py-0">
                                        <div class="header">
                                            <span class="update-info">New</span>
                                            <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.2</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 21</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 108.8k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
                                    </div>
                                    <div class="card-title text-light">
                                        <h4 class="anime-title">Nanatsu no Taizai: Mokushiroku no Yonkishi</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Jumat -->
                <div class="row row-cols-1 py-3">
                    <div class="col mb-2">
                        <section class="title d-flex align-items-center gap-1" id="jumat">
                            <h3 class="text-light text-size">Jumat</h3>
                            <span class="text-size text-secondary mb-1">( 2 Anime )</span>
                        </section>
                    </div>

                    <div class="col">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-2 g-lg-3">
                            <a href="#" class="col text-decoration-none">
                                <div class="card text-white" style="background-color: transparent;">
                                    <img src="/assets/img/high-card-season-2.webp" class="card-img" alt="anime">
                                    <div class="card-img-overlay px-0 py-0">
                                        <div class="header">
                                            <span class="update-info">New</span>
                                            <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.2</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 20.8k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
                                    </div>
                                    <div class="card-title text-light">
                                        <h4 class="anime-title">High Card Season 2</h4>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="col text-decoration-none">
                                <div class="card text-white" style="background-color: transparent;">
                                    <img src="/assets/img/nanatsu-no-taizai-mokushiroku-no-yonkishi.webp" class="card-img"
                                        alt="anime">
                                    <div class="card-img-overlay px-0 py-0">
                                        <div class="header">
                                            <span class="update-info">New</span>
                                            <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.2</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 21</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 108.8k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
                                    </div>
                                    <div class="card-title text-light">
                                        <h4 class="anime-title">Nanatsu no Taizai: Mokushiroku no Yonkishi</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Sabtu -->
                <div class="row row-cols-1 py-3">
                    <div class="col mb-2">
                        <section class="title d-flex align-items-center gap-1" id="sabtu">
                            <h3 class="text-light text-size">Sabtu</h3>
                            <span class="text-size text-secondary mb-1">( 2 Anime )</span>
                        </section>
                    </div>

                    <div class="col">
                        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-2 g-lg-3">
                            <a href="#" class="col text-decoration-none">
                                <div class="card text-white" style="background-color: transparent;">
                                    <img src="/assets/img/high-card-season-2.webp" class="card-img" alt="anime">
                                    <div class="card-img-overlay px-0 py-0">
                                        <div class="header">
                                            <span class="update-info">New</span>
                                            <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.2</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 9</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 20.8k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
                                    </div>
                                    <div class="card-title text-light">
                                        <h4 class="anime-title">High Card Season 2</h4>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="col text-decoration-none">
                                <div class="card text-white" style="background-color: transparent;">
                                    <img src="/assets/img/nanatsu-no-taizai-mokushiroku-no-yonkishi.webp" class="card-img"
                                        alt="anime">
                                    <div class="card-img-overlay px-0 py-0">
                                        <div class="header">
                                            <span class="update-info">New</span>
                                            <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.2</span>
                                        </div>
                                        <div class="footer">
                                            <span class="episode-info">Eps 21</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer mt-2 mt-lg-3">
                                    <div class="view-info text-light my-1 my-lg-2">
                                        <span><i class="fa-regular fa-eye"></i> 108.8k</span>
                                        <span><i class='fa-solid fa-fire-flame-curved' style="color: red;"></i>
                                            <b>Rame</b></span>
                                    </div>
                                    <div class="card-title text-light">
                                        <h4 class="anime-title">Nanatsu no Taizai: Mokushiroku no Yonkishi</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Anime Content End -->
        </div>
        <!-- Content End -->
    </section>

    <!-- Sidebar Jadwal Tayang -->
    <div class="sidebar-jadwal-tayang">
        <ul class="nav nav-pills d-flex flex-column gap-2">
            <li class="nav-item">
                <a class="nav-link text-size active" href="#minggu">Minggu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#senin">Senin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#selasa">Selasa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#rabu">Rabu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#kamis">Kamis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#jumat">Jumat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#sabtu">Sabtu</a>
            </li>
        </ul>
    </div>
    <!-- Sidebar Jadwal Tayang End -->
@endsection
