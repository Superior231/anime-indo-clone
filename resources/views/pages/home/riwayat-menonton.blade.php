@extends('layouts.main')

@section('content')
<section class="riwayat-menonton">
    @include('components.navbar')

    <div class="title-riwayat-menonton d-flex align-items-center justify-content-center gap-1 pb-4">
        <i class='bx bx-history text-light fs-2 icon'></i>
        <h2 class="text-light text-size text-center my-0 fs-2">Riwayat Menonton</h2>
    </div>

    <!-- Content -->
    <div class="container-riwayat-menonton pb-5">
        <div class="anime-content d-flex flex-column gap-4 pb-5">
            <div class="col d-flex flex-column gap-2">
                <h3 class="text-light text-size">Hari ini</h3>
                <a class="anime-content-riwayat-menonton d-flex text-decoration-none gap-3">
                    <div class="time-info d-flex flex-column align-items-center gap-1 pt-1 pt-lg-2">
                        <i class='bx bx-history text-secondary fs-5 icon'></i>
                        <span class="text-size text-secondary">02:58</span>
                    </div>
    
                    <div class="card">
                        <img src="/assets/img/akuyaku-reijou-level-99-watashi-wa-ura-boss-desu-ga-maou-dewa-arimasen.webp" class="card-img" alt="anime">
                    </div>
    
                    <div class="card-title text-light d-flex flex-column w-100">
                        <h4 class="text-size anime-title">Akuyaku Reijou Level 99</h4>
                        <span class="text-size text-light episode-info">Eps 10</span>
                        <span class="text-size text-light menit-info">18:12 / 23:40</span>
                        <div class="progress mt-1" style="height: 2px;">
                            <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col d-flex flex-column gap-2">
                <h3 class="text-light text-size">Kemarin</h3>
                <a class="anime-content-riwayat-menonton d-flex text-decoration-none gap-3">
                    <div class="time-info d-flex flex-column align-items-center gap-1 pt-1 pt-lg-2">
                        <i class='bx bx-history text-secondary fs-5 icon'></i>
                        <span class="text-size text-secondary">18:27</span>
                    </div>
    
                    <div class="card">
                        <img src="/assets/img/kusuriya-no-hitorigoto.webp" class="card-img" alt="anime">
                    </div>
    
                    <div class="card-title text-light d-flex flex-column w-100">
                        <h4 class="text-size anime-title">Kusuriya no Hitorigoto</h4>
                        <span class="text-size text-light episode-info">Eps 22</span>
                        <span class="text-size text-light menit-info">23:35 / 23:40</span>
                        <div class="progress mt-1" style="height: 2px;">
                            <div class="progress-bar w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </a>
                
                <a class="anime-content-riwayat-menonton d-flex text-decoration-none gap-3">
                    <div class="time-info d-flex flex-column align-items-center gap-1 pt-1 pt-lg-2">
                        <i class='bx bx-history text-secondary fs-5 icon'></i>
                        <span class="text-size text-secondary">16:00</span>
                    </div>
    
                    <div class="card">
                        <img src="/assets/img/mashle-s2.webp" class="card-img" alt="anime">
                    </div>
    
                    <div class="card-title text-light d-flex flex-column w-100">
                        <h4 class="text-size anime-title">Mashle Season 2</h4>
                        <span class="text-size text-light episode-info">Eps 9</span>
                        <span class="text-size text-light menit-info">23:35 / 23:40</span>
                        <div class="progress mt-1" style="height: 2px;">
                            <div class="progress-bar w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col d-flex flex-column gap-2">
                <h3 class="text-light text-size">11 Maret 2024</h3>
                <a class="anime-content-riwayat-menonton d-flex text-decoration-none gap-3">
                    <div class="time-info d-flex flex-column align-items-center gap-1 pt-1 pt-lg-2">
                        <i class='bx bx-history text-secondary fs-5 icon'></i>
                        <span class="text-size text-secondary">20:00</span>
                    </div>
    
                    <div class="card">
                        <img src="/assets/img/solo-leveling.webp" class="card-img" alt="anime">
                    </div>
    
                    <div class="card-title text-light d-flex flex-column w-100">
                        <h4 class="text-size anime-title">Solo Leveling</h4>
                        <span class="text-size text-light episode-info">Eps 9</span>
                        <span class="text-size text-light menit-info">07:02 / 23:40</span>
                        <div class="progress mt-1" style="height: 2px;">
                            <div class="progress-bar w-25" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </a>
                
                <a class="anime-content-riwayat-menonton d-flex text-decoration-none gap-3">
                    <div class="time-info d-flex flex-column align-items-center gap-1 pt-1 pt-lg-2">
                        <i class='bx bx-history text-secondary fs-5 icon'></i>
                        <span class="text-size text-secondary">13:36</span>
                    </div>
    
                    <div class="card">
                        <img src="/assets/img/boku-no-kokoro-no-yabai-yatsu-season-2.webp" class="card-img" alt="anime">
                    </div>
    
                    <div class="card-title text-light d-flex flex-column w-100">
                        <h4 class="text-size anime-title">Boku no Kokoro no Yabai Yatsu Season 2</h4>
                        <span class="text-size text-light episode-info">Eps 10</span>
                        <span class="text-size text-light menit-info">12:13 / 23:40</span>
                        <div class="progress mt-1" style="height: 2px;">
                            <div class="progress-bar w-50" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Content End -->

</section>
@endsection