<nav>
    @guest
        <div class="container mt-3 d-flex justify-content-center">
            <a href="#" class="custom-nav d-inline-block text-decoration-none text-center">
                <img src="{{ asset('assets/NAVBAR-GUEST.svg') }}" alt="navbar guest">
            </a>
        </div>
    @else
        <div class="container mt-3 d-flex justify-content-between align-items-center bg-grey py-2 px-5 rounded-4">
            <div>
                <img src="{{ asset('assets/LOGO.svg') }}" alt="logo">
            </div>
            {{-- NAVBAR MENU --}}
            <ul class="navbar-nav flex-row mb-2 mb-lg-0">
                @if(Auth::user()->role === 'bendahara')
                    <li class="nav-item me-5"><a href="{{ route('bendahara.dashboard') }}" class="nav-link text-black">Home</a></li>
                    <li class="nav-item me-5"><a href="{{ route('manage.employee.index') }}" class="nav-link text-black">Karyawan</a></li>
                    <li class="nav-item me-5"><a href="{{ route('manage.attendance.index') }}" class="nav-link text-black">Absensi</a></li>
                    <li class="nav-item me-5"><a href="{{ route('manage.payroll.index') }}" class="nav-link text-black">Gaji</a></li>
                @elseif(Auth::user()->role === 'karyawan')
                    <li class="nav-item me-5"><a href="{{ route('employee.dashboard') }}" class="nav-link text-black">Home</a></li>
                    <li class="nav-item me-5"><a href="{{ route('attendance.index') }}" class="nav-link text-black">Absensi</a></li>
                    <li class="nav-item me-5"><a href="{{ route('salary.index') }}" class="nav-link text-black">Gaji Saya</a></li>
                @endif
            </ul>

            {{-- TOMBOL LOGOUT --}}
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button class="btn btn-auth-logout btn-sm">Logout</button>
            </form>
        </div>
    @endguest
</nav>
