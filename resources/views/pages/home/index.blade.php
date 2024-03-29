@extends('layouts.main')

@section('content')
    <section class="home">
        @include('components.navbar')

        <div class="banner">
            <img src="{{ !empty(Auth::user()->banner) ? asset('storage/banners/'.Auth::user()->banner) : asset('/assets/img/banner.png') }}" width="100%" alt="banner">
        </div>

        <div class="banner-mobile">
            <img src="{{ !empty(Auth::user()->banner) ? asset('storage/banners/'.Auth::user()->banner) : asset('/assets/img/banner.png') }}" width="100%" alt="banner" class="mt-5">
        </div>

        <!-- Home -->
        <div class="container-home">
            <div class="energy mx-0 ms-auto">
                <span class="text-light"><i class="fa-solid fa-bolt-lightning text-primary"></i>&nbsp; 1 / 2</span>
            </div>

            <!-- User Info -->
            <div class="profile d-flex justify-content-between mt-5">
                <a href="{{ route('akun') }}" class="row d-flex text-decoration-none akun">
                    <div class="col d-flex gap-3 w-100">
                        <div class="profile-image">
                            <img class="img" src="{{ !empty(Auth::user()->avatar) ? asset('storage/avatars/'.Auth::user()->avatar) : 'https://ui-avatars.com/api/?background=random&name='. urlencode(Auth::user()->name) }}">
                        </div>
                        <div class="user-info d-flex flex-column">
                            <span class="text-secondary fs-6">Welcome,</span>
                            <span class="text-light fs-6">{{ Auth::user()->name }}</span>
                        </div>
                    </div>
                </a>
                <div class="row">
                    <div class="col d-flex align-items-center">
                        <a href="{{ route('pengaturan') }}" title="Pengaturan">
                            <i class='bx bxs-cog icon fs-2 text-primary'></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- User Info End -->

            <!-- Premium Card -->
            <div class="row row-cols-2 d-flex align-items-center mt-4 mx-0" id="price">
                <a href="{{ route('pricing') }}" class="col d-flex flex-column text-decoration-none">
                    <span class="text-primary fw-bold"><i class="fa-solid fa-gem"></i>&nbsp; Premium</span>
                    <span class="text-light">Capek liat iklan?</span>
                    <span class="text-light">Ayo Beli Premium</span>
                </a>
                <a href="{{ route('pricing') }}" class="col d-flex flex-column text-decoration-none">
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

            <!-- Genre -->
            <div class="genre py-3">
                <div class="title">
                    <h3 class="text-light text-size fw-bold">Genre</h3>
                </div>
                <div class="genre-container d-flex align-items-center gap-2">
                    <a href="#">Movie</a>
                    <a href="genre.html">Action</a>
                    <a href="#">Adventure</a>
                    <a href="#">Comedy</a>
                    <a href="#">Demons</a>
                    <a href="#">Drama</a>
                    <a href="#">Ec*hi</a>
                    <a href="#">Fantasy</a>
                    <a href="#">Game</a>
                    <a href="#">Harem</a>
                    <a href="#">Historical</a>
                    <a href="#">Horror</a>
                    <a href="#">Josei</a>
                    <a href="#">Magic</a>
                    <a href="#">Martial Arts</a>
                    <a href="#">Mecha</a>
                    <a href="#">Military</a>
                    <a href="#">Music</a>
                    <a href="#">Mystery</a>
                    <a href="#">Psychological</a>
                    <a href="#">Parody</a>
                    <a href="#">Police</a>
                    <a href="#">Romance</a>
                    <a href="#">Samurai</a>
                    <a href="#">School</a>
                    <a href="#">Sci-Fi</a>
                    <a href="#">Seinen</a>
                    <a href="#">Shoujo</a>
                    <a href="#">Shoujo Ai</a>
                    <a href="#">Shounen</a>
                    <a href="#">Slice of Life</a>
                    <a href="#">Sports</a>
                    <a href="#">Space</a>
                    <a href="#">Super Power</a>
                    <a href="#">Supernatural</a>
                    <a href="#">Thriller</a>
                    <a href="#">Vampire</a>
                </div>
            </div>
            <!-- Genre End -->

            <!-- Action -->
            <div class="action">
                <div class="actions d-flex justify-content-between align-items-center">
                    <div class="title d-flex gap-1 mt-3">
                        <h3 class="text-light text-size fw-bold">Episode Terbaru</h3>
                        <a href=""><i class="fa-solid fa-rotate-right text-primary fs-4 mt-0 mt-lg-1"></i></a>
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
                    <a href="anime.html" class="col text-decoration-none">
                        <div class="card text-white" style="background-color: transparent;">
                            <img src="/assets/img/mashle-s2.webp" class="card-img" alt="anime">
                            <div class="card-img-overlay px-0 py-0">
                                <div class="header">
                                    <span class="update-info">New</span>
                                    <span class="rate text-light"><i class="fa-solid fa-star fa-xs"></i>7.65</span>
                                </div>
                                <div class="footer">
                                    <span class="episode-info">Eps 11</span>
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
                            <img src="/assets/img/solo-leveling.webp" class="card-img" alt="anime">
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
                <a href="anime-tamat.html" class="lihat-jadwal text-decoration-none d-flex align-items-center gap-1">
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

    <!-- Telegram -->
    <div class="telegram">
        <a class="icon-telegram" href="#"><i class='bx bxs-paper-plane fs-3'></i></a>
    </div>
    <!-- Telegram End -->
@endsection
