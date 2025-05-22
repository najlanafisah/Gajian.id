@extends('layouts.app')

@section('content')
<div>
    <div class="row justify-content-center">

            <div class="col-md-4">
                <div>
                    <img src="{{ asset('assets/LOGIN.gif') }}" alt="GIF Login">
                </div>
            </div>

            <div class="col-md-8">
                <div class="card h-100 border-0 rounded-start-5 bg-grey d-flex justify-content-center">
                    <div class="card-body py-5 px-5 login-title">
                        <h2 class="mb-2 text-black fw-bold">Fokus ke Bisnisnya, Gaji Biar Kami Urus</h2>
                        <p class="text-black fw-light mb-5">Login dan nikmati kemudahan bersama Gajian.id</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="mb-4">
                                <label for="email" class="form-label">Email kamu</label>
                                <input id="email" type="email"
                                    class="border border-black form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password" class="form-label">Password kamu</label>
                                <input id="password" type="password"
                                    class="border border-black form-control @error('password') is-invalid @enderror"
                                    name="password" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4 form-check">
                                <input class="border border-black form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">Ingat aku</label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-auth-login border border-black">Masuk</button>
                                @if (Route::has('password.request'))
                                    <a class="text-black" href="{{ route('password.request') }}">
                                        Lupa Password Kamu?
                                    </a>
                                @endif
                            </div>

                        </form>
                    </div>
                </div>
            </div>

    </div>
</div>
@endsection
