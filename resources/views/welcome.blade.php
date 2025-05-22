@extends('base')

@section('content')

    <section class="rounded-section py-5">
        <div clasS="text-center mt-2">
            <img src="{{ asset('assets/HERO-IMG.svg') }}" alt="hero img">
        </div>
        <div class="text-center hero-text">
            <h1 class="text-black">Gaji jadi <span class="text-blue">beban</span>?</h1>
            <p class="text-black fw-light mt-4 mx-5">Gabung dan rasakan mudahnya bayar gaji. Masuk dulu, biar gaji lancar terus! Gajian.id bantu ringankan beban gaji—cukup dengan sekali klik.</p>
        </div>
        <div class="d-flex justify-content-center my-5">
            <a href="{{ ('login') }}" class="btn-auth-eye d-inline-block text-decoration-none text-center">
                <p>L<img src="{{ asset('assets/EYE.gif') }}" alt="eye btn">GIN</p>
            </a>
        </div>
    </section>

@endsection