@extends('layouts.main')

@section('content')
    <section class="katalog-anime">
        @include('components.navbar')

        <div class="title-katalog-anime d-flex align-items-center justify-content-center gap-1">
            <i class='bx bx-list-ul text-light fs-2 icon'></i>
            <h2 class="text-light text-size text-center my-0 fs-2">Katalog Anime</h2>
        </div>

        <!-- Content -->
        <div class="container-katalog-anime pb-5 pe-0 me-0">
            <!-- Anime Content -->
            <div class="anime-content d-flex flex-column gap-5">
                <section class="title" id="other">
                    <h3 class="text-light text-size mb-3">#</h3>
                    <div class="anime-katalog-container d-flex flex-column gap-3">
                        <a href="#" class="katalog-anime-content text-decoration-none">
                            <div class="gambar">
                                <img src="/assets/img/100-man-no-inochi-no-ue-ni-ore-wa-tatteiru.webp" alt="">
                            </div>
                            <div class="title-anime">
                                <span class="text-light text-size">100-man no Inochi no Ue ni Ore wa Tatteiru</span>
                            </div>
                        </a>

                        <a href="#" class="katalog-anime-content text-decoration-none">
                            <div class="gambar">
                                <img src="/assets/img/100-man-no-inochi-no-ue-ni-ore-wa-tatteiru-season2.webp" alt="">
                            </div>
                            <div class="title-anime">
                                <span class="text-light text-size">100-man no Inochi no Ue ni Ore wa Tatteiru Season 2</span>
                            </div>
                        </a>

                        <a href="#" class="katalog-anime-content text-decoration-none">
                            <div class="gambar">
                                <img src="/assets/img/11eyes.webp" alt="">
                            </div>
                            <div class="title-anime">
                                <span class="text-light text-size">11eyes</span>
                            </div>
                        </a>

                        <a href="#" class="katalog-anime-content text-decoration-none">
                            <div class="gambar">
                                <img src="/assets/img/3d-kanojo-real-girl.webp" alt="">
                            </div>
                            <div class="title-anime">
                                <span class="text-light text-size">3D Kanojo: Real Girl</span>
                            </div>
                        </a>

                        <a href="#" class="katalog-anime-content text-decoration-none">
                            <div class="gambar">
                                <img src="/assets/img/3d-kanojo-real-girl-season2.webp" alt="">
                            </div>
                            <div class="title-anime">
                                <span class="text-light text-size">3D Kanojo: Real Girl Season 2</span>
                            </div>
                        </a>
                    </div>
                </section>

                <section class="title" id="a">
                    <h3 class="text-light text-size mb-3">A</h3>
                    <div class="anime-content-katalog d-flex flex-column gap-3">
                        <a href="#" class="katalog-anime-content text-decoration-none">
                            <div class="gambar">
                                <img src="/assets/img/aharen-san-wa-hakarenai.webp" alt="">
                            </div>
                            <div class="title-anime">
                                <span class="text-light text-size">Aharen-san wa Hakarenai</span>
                            </div>
                        </a>

                        <a href="#" class="katalog-anime-content text-decoration-none">
                            <div class="gambar">
                                <img src="/assets/img/akuyaku-reijou-level-99-watashi-wa-ura-boss-desu-ga-maou-dewa-arimasen.webp" alt="">
                            </div>
                            <div class="title-anime">
                                <span class="text-light text-size">Akuyaku Reijou Level 99</span>
                            </div>
                        </a>

                        <a href="#" class="katalog-anime-content text-decoration-none">
                            <div class="gambar">
                                <img src="/assets/img/akuyaku-reijou-nano-de-last-boss-wo-kattemimashita.webp" alt="">
                            </div>
                            <div class="title-anime">
                                <span class="text-light text-size">Akuyaku Reijou nano de Last Boss wo Kattemimashita</span>
                            </div>
                        </a>

                        <a href="#" class="katalog-anime-content text-decoration-none">
                            <div class="gambar">
                                <img src="/assets/img/aldnoahzero.webp" alt="">
                            </div>
                            <div class="title-anime">
                                <span class="text-light text-size">Aldnoah Zero</span>
                            </div>
                        </a>
                    </div>
                </section>
            </div>
            <!-- Anime Content End -->
        </div>
        <!-- Content End -->
    </section>

    <!-- Sidebar Jadwal Tayang -->
    <div class="sidebar-katalog-anime">
        <ul class="nav nav-pills d-flex flex-column gap-2">
            <li class="nav-item">
                <a class="nav-link text-size active" href="#other">#</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#a">A</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#b">B</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#c">C</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#d">D</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#e">E</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#f">F</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#g">G</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#h">H</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#i">I</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#j">J</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#k">K</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#l">L</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#m">M</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#n">N</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#o">O</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#p">P</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#q">Q</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#r">R</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#s">S</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#T">T</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#u">U</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#v">V</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#w">W</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#x">X</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#y">Y</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-size" href="#z">Z</a>
            </li>
        </ul>
    </div>
    <!-- Sidebar Jadwal Tayang End -->
@endsection