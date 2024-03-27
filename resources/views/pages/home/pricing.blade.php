@extends('layouts.main')

@section('content')
    <section class="pricing">
        @include('components.navbar')

        <div class="pricing-image-model">
            <img src="/assets/img/pricing-loid-forger.webp" alt="">
        </div>

        <div class="title-pricing d-flex align-items-center gap-1 mb-4">
            <i class='bx bxs-wallet text-light fs-2 icon'></i>
            <h2 class="text-light text-size text-center my-0 fs-2">Langganan</h2>
        </div>

        <div class="container-pricing py-4">
            <!-- Premium Info -->
            <div class="premium-info d-flex justify-content-center align-items-center mb-5">
                <div class="premium-info-card d-flex flex-column justify-content-center align-items-center">
                    <h2 class="text-light text-size">Belum</h2>
                    <h6 class="text-light text-size">Premium</h6>
                </div>
            </div>
            <!-- Premium Info End -->

            <!-- Pricing Content -->
            <div class="row row-cols-2 row-cols-lg-4 g-3">
                <a href="#" class="col text-decoration-none">
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <div class="harga">
                                <h3 class="text-primary text-size">Rp. 12.000</h3>
                            </div>
                            <div class="waktu d-flex align-items-center justify-content-center gap-1">
                                <i class='bx bx-history text-light fs-4 icon'></i>
                                <h6 class="text-light text-size py-0 my-0">1 Bulan</h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-center align-items-center">
                            <h5 class="text-primary text-size py-0 my-0">Beli</h5>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <div class="harga">
                                <h3 class="text-primary text-size">Rp. 30.000</h3>
                            </div>
                            <div class="waktu d-flex align-items-center justify-content-center gap-1">
                                <i class='bx bx-history text-light fs-4 icon'></i>
                                <h6 class="text-light text-size py-0 my-0">3 Bulan</h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-center align-items-center">
                            <h5 class="text-primary text-size py-0 my-0">Beli</h5>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <div class="harga">
                                <h3 class="text-primary text-size">Rp. 55.000</h3>
                            </div>
                            <div class="waktu d-flex align-items-center justify-content-center gap-1">
                                <i class='bx bx-history text-light fs-4 icon'></i>
                                <h6 class="text-light text-size py-0 my-0">6 Bulan</h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-center align-items-center">
                            <h5 class="text-primary text-size py-0 my-0">Beli</h5>
                        </div>
                    </div>
                </a>

                <a href="#" class="col text-decoration-none">
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                            <div class="harga">
                                <h3 class="text-primary text-size">Rp. 99.000</h3>
                            </div>
                            <div class="waktu d-flex align-items-center justify-content-center gap-1">
                                <i class='bx bx-history text-light fs-4 icon'></i>
                                <h6 class="text-light text-size py-0 my-0">12 Bulan</h6>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-center align-items-center">
                            <h5 class="text-primary text-size py-0 my-0">Beli</h5>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Pricing Content End -->

            <!-- Fitur Premium -->
            <div class="row row-cols-12 fitur-premium py-5">
                <div class="col fitur-premium-container">
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center p-0">
                            <h3 class="text-size text-center">Fitur Premium</h3>
                            <h4 class="text-light text-size">Unlimited Energy</h4>
                            <h4 class="text-light text-size">Unlimited Comment</h4>
                            <h4 class="text-light text-size">Menghilangkan Iklan</h4>
                            <h4 class="text-light text-size">Batch Anime</h4>
                            <h4 class="text-light text-size">Mendukung Kualitas 1080P</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fitur Premium End -->

        </div>
    </section>
@endsection