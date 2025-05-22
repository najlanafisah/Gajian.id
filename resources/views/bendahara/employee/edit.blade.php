@extends('base')

@section('content')

<section class="rounded-section section pb-5">
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="card shadow-sm">
                    <div class="card-header border-0 bg-yellow text-black">
                        <h5 class="mb-0">Tambah Data Karyawan</h5>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('manage.employee.update', $employee->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <!-- name -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" name="name" id="name" value="{{ old('name', $employee->user->name) }}" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan nama lengkap">
                                @error('name') 
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Aktif</label>
                                <input type="email" name="email" id="email" value="{{ old('email', $employee->user->email) }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan email">
                                @error('email') 
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Password Default</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder ="Password baru (Optional)">
                                @error('password') 
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Jabatan -->
                            <div class="mb-3">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" name="jabatan" id="jabatan" value="{{ old('jabatan', $employee->jabatan) }}" class="form-control @error('jabatan') is-invalid @enderror" placeholder ="Contoh: Staff, Admin, dll">  
                                @error('jabatan') 
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Gaji Pokok -->
                            <div class="mb-3">
                                <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                                <input type="number" name="gaji_pokok" id="gaji_pokok" value="{{ old('gaji_pokok', $employee->gaji_pokok) }}" class="form-control @error('gaji_pokok') is-invalid @enderror" placeholder="Masukkan gaji pokok">
                                @error('gaji_pokok') 
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Button -->
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('manage.employee.index') }}" class="btn btn-auth-logout">Kembali</a>
                                <button type="submit" class="btn btn-auth-login">Simpan</button>
                            </div>

                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

@endsection