@extends('base')

@section('content')
<section class="rounded-section section pb-5">
    <div class="container pb-5">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-3">
                    <img src="{{ asset('assets/GAGAJI.svg') }}" alt="gagaji" style="width: 23rem;">
                </div>
                <div class="col-md-8 user-card bg-sky-blue d-flex flex-column justify-content-center rounded-4">
                    <p class="text-black hello mt-2">Halo</p>
                    <p class="text-black user-name lh-1">{{ Auth::user()->name }}</p>
                    <p class="text-black desc-user mt-3">Cek absensi dan slip gaji Anda dengan mudah di sini</p>
                </div>
            </div>
            <div class="row g-4">
                    <!-- Karyawan -->
                    <div class="col-md-4">
                        <div class="d-flex align-items-center h-100 p-4 bg-sky-blue rounded-4 mt-4">
                            <div class="me-3">
                                <a class="presensi-button" href="{{ route('manage.attendance.index') }}">
                                    <img src="{{ asset('assets/PRESENSI.svg') }}" alt="folder">
                                </a>
                            </div>
                            <div>
                                <h5 class="card-title text-black fw-semibold">Presensi</h5>
                                <p class="card-text mt-2">Lihat dan pantau kehadiran harian.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Presensi -->
                    <div class="col-md-4">
                        <div class="d-flex align-items-center h-100 p-4 bg-grey rounded-4 mt-4">
                            <div class="">
                                <a class="folder-button" href="{{ route('manage.employee.index') }}">
                                    <img src="{{ asset('assets/FOLDER-CLOSE.svg') }}" alt="folder">
                                </a>
                            </div>
                            <div>
                                <h5 class="card-title text-black fw-semibold">Karyawan</h5>
                                <p class="card-text mt-2">Kelola informasi karyawan.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Gaji -->
                    <div class="col-md-4">
                        <div class="d-flex align-items-center h-100 p-4 bg-yellow rounded-4 mt-4">
                            <div class="">
                                <a class="kantong-button" href="{{ route('manage.payroll.index') }}">
                                    <img src="{{ asset('assets/KANTONG.svg') }}" alt="folder">
                                </a>
                            </div>
                            <div>
                                <h5 class="card-title text-black fw-semibold">Gaji</h5>
                                <p class="card-text mt-2">Hitung dan kelola gaji berdasarkan presensi.</p>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</section>
@endsection