<nav class="navbar navbar-expand-lg bg-white shadow-sm fixed-top">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('dosen.beranda') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Tel-U Timetable" style="height: 40px; margin-right: 20px;">
        </a>

        <!-- Toggle Button for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-3">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dosen/beranda') ? 'active-link' : '' }}" href="{{ route('dosen.beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dosen/tugas') ? 'active-link' : '' }}" href="{{ route('dosen.tugas') }}">Tugas</a>
                </li>
            </ul>

            <!-- User Dropdown -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dosen
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/profile') }}">Profile</a>
                        <a class="dropdown-item" href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1030; /* Pastikan navbar berada di atas elemen lain */
    }

    .navbar-nav .nav-link {
        color: #585858; /* Default text color */
        font-weight: 500; /* Slightly bold text */
        padding-bottom: 3px; /* Closer underline */
        border-bottom: 2px solid transparent; /* Default underline */
        transition: all 0.3s ease; /* Smooth transition */
        font-size: 0.9rem; /* Adjust font size smaller */
    }

    .navbar-nav .nav-link:hover {
        color: #bc1010; /* Hover text color */
    }

    .navbar-nav .active-link {
        color: #bc1010 !important; /* Active text color */
        border-bottom: 2px solid #bc1010; /* Active underline closer to text */
        width: auto; /* Fit underline to text width */
    }

    .navbar-nav .nav-item {
        margin-right: 30px; /* Increase spacing between items */
    }

    .container-fluid {
        max-width: 1440px; /* Extend width */
        padding-left: 1rem; /* Add spacing to the left */
        padding-right: 1rem; /* Add spacing to the right */
    }

    body {
        padding-top: 70px; /* Adjust for fixed navbar height */
    }
</style>
