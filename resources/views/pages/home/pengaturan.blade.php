@extends('layouts.main')

@section('content')
    <section class="pengaturan">
        @include('components.navbar')

        <div class="title-pengaturan d-flex align-items-center gap-1">
            <i class='bx bxs-cog text-light fs-2 icon'></i>
            <h2 class="text-light text-size text-center my-0 fs-2">Pengaturan</h2>
        </div>

        <!-- Content -->
        <div class="container-pengaturan pb-5">
            <div class="pengaturan-content d-flex flex-column gap-2 py-3">
                <a href="{{ route('akun') }}" class="edit-profile text-decoration-none py-4">
                    <div class="row d-flex justify-content-between">
                        <div class="col col-11 d-flex align-items-center gap-4">
                            <i class='bx bxs-user text-light fs-2 icon'></i>
                            <div class="akun-container d-flex flex-column justify-content-center">
                                <h5 class="text-light text-size">Akun</h5>
                                <span class="text-secondary text-size">Edit akun, edit banner dan logout</span>
                            </div>
                        </div>
                        <div class="col col-1 d-flex justify-content-end align-items-center">
                            <i class='bx bx-chevron-right text-light fs-2 icon'></i>
                        </div>
                    </div>
                </a>

                <a href="{{ route('tampilan') }}" class="appearance text-decoration-none py-4">
                    <div class="row d-flex justify-content-between">
                        <div class="col col-11 d-flex align-items-center gap-4">
                            <i class='bx bxs-palette text-light fs-2 icon'></i>
                            <div class="appearance-container d-flex flex-column justify-content-center">
                                <h5 class="text-light text-size">Tampilan</h5>
                                <span class="text-secondary text-size">Tema</span>
                            </div>
                        </div>
                        <div class="col col-1 d-flex justify-content-end align-items-center">
                            <i class='bx bx-chevron-right text-light fs-2 icon'></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="opsi-bahasa text-decoration-none py-4">
                    <div class="row d-flex justify-content-between">
                        <div class="col col-11 d-flex align-items-center gap-4">
                            <i class='bx bx-globe text-light fs-2 icon'></i>
                            <div class="bahasa-container d-flex flex-column justify-content-center">
                                <h5 class="text-light text-size">Opsi bahasa</h5>
                                <span class="text-secondary text-size">Default</span>
                            </div>
                        </div>
                        <div class="col col-1 d-flex justify-content-end align-items-center">
                            <i class='bx bx-chevron-right text-light fs-2 icon'></i>
                        </div>
                    </div>
                </a>
            </div>

            <div class="title-pengaturan d-flex align-items-center gap-1 m-0 p-0 pt-3">
                <i class='bx bxs-grid-alt text-light fs-2 icon'></i>
                <h2 class="text-light text-size text-center my-0 fs-2">Lainnya</h2>
            </div>

            <div class="lainnya-content d-flex flex-column gap-2 py-3">
                <a href="#" class="share text-decoration-none py-4">
                    <div class="row d-flex justify-content-between">
                        <div class="col col-11 d-flex align-items-center gap-4">
                            <i class='bx bxs-share-alt text-light fs-2 icon'></i>
                            <h5 class="text-light text-size py-0 my-0">Berebagi dengan teman</h5>
                        </div>
                        <div class="col col-1 d-flex justify-content-end align-items-center">
                            <i class='bx bx-chevron-right text-light fs-2 icon'></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="masukan text-decoration-none py-4">
                    <div class="row d-flex justify-content-between">
                        <div class="col col-11 d-flex align-items-center gap-4">
                            <i class='bx bxs-pencil text-light fs-2 icon'></i>
                            <h5 class="text-light text-size py-0 my-0">Masukan</h5>
                        </div>
                        <div class="col col-1 d-flex justify-content-end align-items-center">
                            <i class='bx bx-chevron-right text-light fs-2 icon'></i>
                        </div>
                    </div>
                </a>

                <a href="#" class="tentang-kami text-decoration-none py-4">
                    <div class="row d-flex justify-content-between">
                        <div class="col col-11 d-flex align-items-center gap-4">
                            <i class='bx bx-headphone text-light fs-2 icon'></i>
                            <h5 class="text-light text-size py-0 my-0">Tentang kami</h5>
                        </div>
                        <div class="col col-1 d-flex justify-content-end align-items-center">
                            <i class='bx bx-chevron-right text-light fs-2 icon'></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Content End -->

    </section>
@endsection