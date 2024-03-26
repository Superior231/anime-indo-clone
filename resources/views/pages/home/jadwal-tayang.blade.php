@extends('layouts.main')

@section('content')
    <section class="jadwal-tayang">
        @include('components.navbar')

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
