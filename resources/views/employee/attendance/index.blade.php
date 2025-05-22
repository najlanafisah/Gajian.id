@extends('base')

@section('content')

<section class="rounded-section section pb-5">
    <div class="container pb-5">
        <h2 class="mb-3 fw-semibold">Absensi Hari Ini</h2>

        @if(session('message'))
        <div class="alert alert-primary" role="alert">
            {{ session('message') }}
        </div>
        @endif

        <!-- Tombol Presensi -->
        @if($hasCheckInToday)
            <button class="btn btn-secondary mb-3" disabled>Kamu sudah absen</button>
        @else
        <form action="{{ route('attendance.store') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary" mb-3>Absen Sekarang</button>
        </form>
        @endif
    
        <!-- Tabel Presensi -->
        <h5 class="mb-3">Daftar Presensi Bulan Ini (1 - 25)</h5>
        <div class="table-responsive">
            <table class="table table-bordered bg-white rounded-4">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($attendances as $index => $attendance)
                    <tr>
                        <td>{{  $index + 1 }}</td>
                        <td>{{ $attendance->created_at->format('d M Y') }}</td>
                        <td>{{ $attendance->created_at->format('H:i') }}</td>
                        <td>{{ $attendance->status }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Belum ada data presensi</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>

@endsection