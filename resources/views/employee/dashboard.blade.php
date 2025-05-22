@extends('base')

@section('content')

<section class="rounded-section section pb-5">
    <div class="container pb-5">
        <div class="row d-flex justify-content-between align-items-center">
            <div class="col-md-9 user-card bg-sky-blue d-flex flex-column justify-content-center rounded-4">
                <p class="text-black hello mt-2">Halo</p>
                <p class="text-black user-name lh-1">{{ Auth::user()->name }}</p>
                <p class="text-black desc-user mt-3">Cek absensi dan slip gaji Anda dengan mudah di sini</p>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('assets/GAGAJI.svg') }}" alt="gagaji">
            </div>
        </div>
        
        <div class="row g-4 pb-5">

                <!-- Payroll -->
                <div class="col-md-6">
                    <div class="d-flex align-items-center h-100 p-4 bg-yellow rounded-4 mt-4">
                        <div class="mx-3">
                            <a class="kantong-button" href="{{ route('salary.index') }}">
                                <img src="{{ asset('assets/KANTONG.svg') }}" alt="folder">
                            </a>
                        </div>
                        <div class="presensi-desc">
                            <h5 class="card-title text-black fw-semibold">Cek Gaji Kamu di Sini!</h5>
                            <p class="card-text mt-2">Klik untuk masuk dan melihat slip gaji secara pribadi.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Presensi -->
                <div class="col-md-6">
                    <div class="d-flex align-items-center h-100 p-4 bg-grey rounded-4 mt-4">
                        <div class="mx-3">
                            <a class="folder-button" href="{{ route('attendance.index') }}">
                                <img src="{{ asset('assets/FOLDER-CLOSE.svg') }}" alt="folder">
                            </a>
                        </div>
                        <div class="presensi-desc">
                            <h5 class="card-title text-black fw-semibold">Presensi Hari Ini</h5>
                            <p class="card-text mt-2">Klik di sini untuk memulai absensi Anda dengan mudah dan cepat.</p>
                        </div>
                    </div>
                </div>

        </div>
    </div>
</section>

@endsection