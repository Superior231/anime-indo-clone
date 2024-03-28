@extends('layouts.main')

@section('content')
    <section class="tampilan">
        @include('components.navbar')

        <nav class="title-tampilan text-light" style="--bs-breadcrumb-divider: '>'; color: white !important;" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('pengaturan') }}">Pengaturan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tampilan</li>
            </ol>
        </nav>

        <!-- Content -->
        <div class="container-tampilan">
            <div class="title-tema">
                <h3 class="text-size text-light">Warna Tema</h3>
            </div>

            <div class="warna-content">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="blue" checked style="background-color: #0d6efd;">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="green" style="background-color: #198754;">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="red" style="background-color: #dc3545;">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="pink" style="background-color: #f33795;">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="orange" style="background-color: #fd7e14;">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="purple" style="background-color: #7F27FF;">
                </div>
            </div>


        </div>
        <!-- Content End -->

    </section>
@endsection