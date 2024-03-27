@extends('layouts.main')

@section('content')
    <section class="subscribed-anime">
        @include('components.navbar')

        <div class="title-subscribed-anime d-flex align-items-center justify-content-center gap-1 pb-4">
            <i class='bx bxs-bell text-light fs-2 icon'></i>
            <h2 class="text-light text-size text-center my-0 fs-2">Subscribed Anime</h2>
        </div>

        <div class="container-subscribed-anime pb-5">
            <!-- Anime Content -->
            <div class="anime-content pt-0 py-lg-3 pb-3">
                <div class="row row-cols-3 row-cols-lg-5 g-2 g-lg-3">

                    <a href="#" class="col text-decoration-none">
                        <div class="card text-white" style="background-color: transparent;">
                            <img src="/assets/img/akuyaku-reijou-level-99-watashi-wa-ura-boss-desu-ga-maou-dewa-arimasen.webp" class="card-img" alt="anime">
                            <div class="card-img-overlay px-0 py-0">
                                <div class="footer">
                                    <span class="episode-info">Eps 10</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer mt-2 mt-lg-3">
                            <div class="card-title text-light">
                                <h4 class="anime-title">Akuyaku Reijou Level 99</h4>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="col text-decoration-none">
                        <div class="card text-white" style="background-color: transparent;">
                            <img src="/assets/img/baki.webp" class="card-img" alt="anime">
                            <div class="card-img-overlay px-0 py-0">
                                <div class="footer">
                                    <span class="episode-info">Eps 26</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer mt-2 mt-lg-3">
                            <div class="card-title text-light">
                                <h4 class="anime-title">Baki</h4>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="col text-decoration-none">
                        <div class="card text-white" style="background-color: transparent;">
                            <img src="/assets/img/boku-no-kokoro-no-yabai-yatsu.webp" class="card-img" alt="anime">
                            <div class="card-img-overlay px-0 py-0">
                                <div class="footer">
                                    <span class="episode-info">Eps 12</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer mt-2 mt-lg-3">
                            <div class="card-title text-light">
                                <h4 class="anime-title">Boku no Kokoro no Yabai Yatsu</h4>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="col text-decoration-none">
                        <div class="card text-white" style="background-color: transparent;">
                            <img src="/assets/img/boku-no-kokoro-no-yabai-yatsu-season-2.webp" class="card-img" alt="anime">
                            <div class="card-img-overlay px-0 py-0">
                                <div class="footer">
                                    <span class="episode-info">Eps 10</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer mt-2 mt-lg-3">
                            <div class="card-title text-light">
                                <h4 class="anime-title">Boku no Kokoro no Yabai Yatsu Season 2</h4>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="col text-decoration-none">
                        <div class="card text-white" style="background-color: transparent;">
                            <img src="/assets/img/bucchigiri.webp" class="card-img" alt="anime">
                            <div class="card-img-overlay px-0 py-0">
                                <div class="footer">
                                    <span class="episode-info">Eps 8</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer mt-2 mt-lg-3">
                            <div class="card-title text-light">
                                <h4 class="anime-title">Bucchigiri?!</h4>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="col text-decoration-none">
                        <div class="card text-white" style="background-color: transparent;">
                            <img src="/assets/img/kusuriya-no-hitorigoto.webp" class="card-img" alt="anime">
                            <div class="card-img-overlay px-0 py-0">
                                <div class="footer">
                                    <span class="episode-info">Eps 22</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer mt-2 mt-lg-3">
                            <div class="card-title text-light">
                                <h4 class="anime-title">Kusuriya no Hitorigoto</h4>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="col text-decoration-none">
                        <div class="card text-white" style="background-color: transparent;">
                            <img src="/assets/img/mashle.webp" class="card-img" alt="anime">
                            <div class="card-img-overlay px-0 py-0">
                                <div class="footer">
                                    <span class="episode-info">Eps 12</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer mt-2 mt-lg-3">
                            <div class="card-title text-light">
                                <h4 class="anime-title">Mashle</h4>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="col text-decoration-none">
                        <div class="card text-white" style="background-color: transparent;">
                            <img src="/assets/img/mashle-s2.webp" class="card-img" alt="anime">
                            <div class="card-img-overlay px-0 py-0">
                                <div class="footer">
                                    <span class="episode-info">Eps 9</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer mt-2 mt-lg-3">
                            <div class="card-title text-light">
                                <h4 class="anime-title">Mashle Season 2</h4>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="col text-decoration-none">
                        <div class="card text-white" style="background-color: transparent;">
                            <img src="/assets/img/saikyou-tank-no-meikyuu-kouryaku.webp" class="card-img" alt="anime">
                            <div class="card-img-overlay px-0 py-0">
                                <div class="footer">
                                    <span class="episode-info">Eps 10</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer mt-2 mt-lg-3">
                            <div class="card-title text-light">
                                <h4 class="anime-title">Saikyou Tank no Meikyuu Kouryaku</h4>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="col text-decoration-none">
                        <div class="card text-white" style="background-color: transparent;">
                            <img src="/assets/img/shangri-la-frontier.webp" class="card-img" alt="anime">
                            <div class="card-img-overlay px-0 py-0">
                                <div class="footer">
                                    <span class="episode-info">Eps 22</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer mt-2 mt-lg-3">
                            <div class="card-title text-light">
                                <h4 class="anime-title">Shangri-La Frontier</h4>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="col text-decoration-none">
                        <div class="card text-white" style="background-color: transparent;">
                            <img src="/assets/img/solo-leveling.webp" class="card-img" alt="anime">
                            <div class="card-img-overlay px-0 py-0">
                                <div class="footer">
                                    <span class="episode-info">Eps 9</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer mt-2 mt-lg-3">
                            <div class="card-title text-light">
                                <h4 class="anime-title">Solo Leveling</h4>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
            <!-- Anime Content End -->
        </div>
    </section>

    <!-- Back to Top -->
    <div class="back-to-top">
        <a class="icon-back-to-top" href="#"><i class="fa fa-chevron-up fa-2x"></i></a>
    </div>
    <!-- Back to Top End -->
@endsection