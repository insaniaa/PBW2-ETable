<nav class="navbar navbar-expand-lg bg-white shadow-sm">
  <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand d-flex align-items-center" href="/">
          <img src="{{ asset('images/logo.png') }}" alt="Tel-U Timetable" style="height: 40px; margin-right: 8px;">
      </a>

      <!-- Toggle Button for Mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Links -->
      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto">
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('kelola-kelas') ? 'active text-danger fw-bold' : '' }}" href="/kelola-kelas">Kelola Kelas</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('kelola-jadwal') ? 'active text-danger fw-bold' : '' }}" href="/kelola-jadwal">Kelola Jadwal</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('kelola-matkul') ? 'active text-danger fw-bold' : '' }}" href="/kelola-matkul">Kelola Matkul</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link {{ request()->is('kelola-user') ? 'active text-danger fw-bold' : '' }}" href="/kelola-user">Kelola User</a>
              </li>
          </ul>

          <!-- User Dropdown -->
          <ul class="navbar-nav ms-auto">
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Admin
                  </a>
                  <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="/profile">Profile</a>
                      <a class="dropdown-item" href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          Logout
                      </a>
                      <form id="logout-form" action="/logout" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          </ul>
      </div>
  </div>
</nav>
