@extends('layouts.main')

@section('content')
    <section class="edit-akun">
        @include('components.navbar')

        <nav class="title-edit-akun text-light" style="--bs-breadcrumb-divider: '>'; color: white !important;" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('pengaturan') }}">Pengaturan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Akun</li>
            </ol>
        </nav>

        <!-- Content -->
        <div class="container-edit-akun pb-5">
            <div class="row row-cols-1 row-cols-lg-2 pb-5 g-3">
                <div class="col col-lg-4">
                    <div class="card">
                        <div class="card-body d-flex flex-column gap-4 py-4">
                            <figure class="profile d-flex flex-column justify-content-center align-items-center gap-3">
                                <div class="foto-profile">
                                    <img class="img" src="{{ !empty(Auth::user()->avatar) ? asset('storage/avatars/'.Auth::user()->avatar) : 'https://ui-avatars.com/api/?background=random&name='. urlencode(Auth::user()->name) }}">
                                </div>
                                <figcaption class="text-light text-center">{{ Auth::user()->name }}</figcaption>
                            </figure>

                            <div class="profile-details table-responsive">
                                <table class="table">
                                    <tr>
                                        <td class="text-size">Status</td>
                                        <td class="text-size">:</td>
                                        <td class="text-size">
                                            <div class="badge bg-secondary">{{ Auth::user()->roles }}</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-size">Username</td>
                                        <td class="text-size">:</td>
                                        <td class="text-size">{{ Auth::user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-size">Email</td>
                                        <td class="text-size">:</td>
                                        <td class="text-size">{{ Auth::user()->email }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-8 d-flex flex-column gap-2">
                    <div class="edit-banner py-4" data-bs-toggle="modal" data-bs-target="#edit-banner">
                        <a href="#" class="row d-flex justify-content-between text-decoration-none">
                            <div class="col d-flex align-items-center gap-3">
                                <i class='bx bxs-image text-light fs-2 icon'></i>
                                <h5 class="text-light text-size py-0 my-0">Edit banner</h5>
                            </div>
                        </a>
                    </div>

                    <div class="edit-profile py-4" data-bs-toggle="modal" data-bs-target="#edit-profile">
                        <a href="#" class="row d-flex justify-content-between text-decoration-none">
                            <div class="col d-flex align-items-center gap-3">
                                <i class='bx bxs-user text-light fs-2 icon'></i>
                                <h5 class="text-light text-size py-0 my-0">Edit profile</h5>
                            </div>
                        </a>
                    </div>

                    <div class="edit-password py-4" data-bs-toggle="modal" data-bs-target="#edit-password">
                        <a href="#" class="row d-flex justify-content-between text-decoration-none">
                            <div class="col d-flex align-items-center gap-3">
                                <i class='bx bxs-lock-alt text-light fs-2 icon'></i>
                                <h5 class="text-light text-size py-0 my-0">Ganti password</h5>
                            </div>
                        </a>
                    </div>

                    <a href="{{ route('logout') }}" class="logout text-decoration-none py-4" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <div class="row d-flex justify-content-between">
                            <div class="col d-flex align-items-center gap-3">
                                <i class='bx bx-arrow-from-left text-light fs-2 icon' style="color: #dc3545 !important;"></i>
                                <h5 class="text-light text-size py-0 my-0 fw-bold" style="color: #dc3545 !important;">Logout</h5>
                            </div>
                        </div>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <!-- Content End -->
    </section>


    <!-- Modal -->
        <!-- modal edit banner -->
        <div class="modal fade" id="edit-banner" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-body-dark">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center justify-content-between border-0">
                        <h5 class="modal-title" id="edit-banner-label">Edit banner</h5>
                        <div class="close-btn" data-bs-dismiss="modal" aria-label="Close" style="cursor: pointer;">
                            <i class='bx bx-x text-light fs-2 icon'></i>
                        </div>
                    </div>
                    <div class="reset-btn">
                        <form action="{{ route('user.delete-banner', $user->id) }}" method="POST">
                            @csrf @method('DELETE') 
                            <button type="submit">Reset</button>
                        </form>
                    </div>
                    
                    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PUT')

                        <div class="modal-body mt-0 pt-0">
                            <figure class="edit-banner d-flex flex-column justify-content-center align-items-center gap-3 mb-4">
                                <div class="foto-banner">
                                    <img class="img" src="{{ !empty(Auth::user()->banner) ? asset('storage/banners/'.Auth::user()->banner) : asset('/assets/img/banner.png') }}">
                                </div>
                            </figure>
                            <label for="upload-banner" class="mb-2">Upload foto (jpg, jpeg, png, dan webp)</label>
                            <input type="file" class="form-control" id="upload-banner" name="banner" accept=".jpg, .jpeg, .png, .webp" onchange="updateTextColor(this)">
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary px-4">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- modal edit banner end -->

        <!-- modal edit profile -->
        <div class="modal fade" id="edit-profile" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-body-dark">
                <div class="modal-content">
                    <div class="modal-header border-0 d-flex align-items-center justify-content-between">
                        <h5 class="modal-title" id="edit-profile-label">Edit profile</h5>
                        <div class="close-btn" data-bs-dismiss="modal" aria-label="Close" style="cursor: pointer;">
                            <i class='bx bx-x text-light fs-2 icon'></i>
                        </div>
                    </div>
                    <div class="reset-btn">
                        <form action="{{ route('user.delete-avatar', $user->id) }}" method="POST">
                            @csrf @method('DELETE') 
                            <button type="submit">Reset avatar</button>
                        </form>
                    </div>
                    
                    <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PUT')

                        <div class="modal-body">
                            <figure class="profile d-flex flex-column justify-content-center align-items-center gap-3 mb-4">
                                <div class="foto-profile">
                                    <img class="img" src="{{ !empty(Auth::user()->avatar) ? asset('storage/avatars/'.Auth::user()->avatar) : 'https://ui-avatars.com/api/?background=random&name='. urlencode(Auth::user()->name) }}">
                                </div>
                            </figure>
                            <label for="upload-foto" class="mb-2">Upload foto (jpg, jpeg, png, dan webp)</label>
                            <input type="file" class="form-control" name="avatar" id="upload-foto" accept=".jpg, .jpeg, .png, .webp" onchange="updateTextColor(this)">
    
                            <label for="edit-username" class="mb-2 mt-3">Username</label>
                            <input type="text" class="form-control text-light" name="name" id="edit-username" placeholder="Namanya jangan sara yaa" value="{{ Auth::user()->name }}" required>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary px-4">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- modal edit profile end -->

        <!-- modal edit password -->
        <div class="modal fade" id="edit-password" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-body-dark">
                <div class="modal-content">
                    <div class="modal-header border-0 d-flex align-items-center justify-content-between">
                        <h5 class="modal-title" id="edit-password-label">Ganti password</h5>
                        <div class="close-btn" data-bs-dismiss="modal" aria-label="Close" style="cursor: pointer;">
                            <i class='bx bx-x text-light fs-2 icon'></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <label for="edit-new-password" class="mb-2">New password</label>
                        <input type="text" class="form-control text-light" id="edit-new-password" placeholder="Enter your new password">
                    </div>
                    <div class="modal-footer border-0">
                        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary px-4">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal edit password end -->
    <!-- Modal End -->


    <!-- Toast -->
    <div class="position-fixed bottom-0 end-0 p-3">
        <div class="toast fade bg-transparent" role="alert" aria-live="assertive" aria-atomic="true" data-delay="5000">
            <div class="toast-header text-light" style="background-color: #146c43; border-radius: 10px 10px 0px 0px;">
                <strong class="me-auto ms-2 d-flex align-items-center gap-1">Success <i class='bx bx-check-circle fs-6'></i></strong>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body" style="background-color: #a3cfbb; border-radius: 0px 0px 10px 10px;">
                <p class="text-dark text-size ms-2 my-0 py-0 fw-normal">{{ session()->get('success') }}</p>
            </div>
        </div>
    </div>    
    <!-- Toast End -->


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            // Cek apakah ada session success
            if ("{{ session()->has('success') }}") {
                // Tampilkan toast
                $('.toast').toast('show');
            }
        });
    </script>

@endsection