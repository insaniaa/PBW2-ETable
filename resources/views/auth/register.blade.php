<x-guest-layout>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow" style="border-radius: 8px;">
        <div class="container-fluid">
            <a class="navbar-brand ps-3" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Tel-U Timetable" style="height: 50px;">
            </a>
            <div class="d-flex me-3 align-items-center">
                <!-- Tombol Daftar -->
                <a href="{{ route('register') }}" class="btn btn-secondary me-2" style="width: 100px;">Daftar</a>
                <!-- Tombol Masuk -->
                <a href="{{ route('login') }}" class="btn btn-danger" style="width: 100px;">Masuk</a>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container-fluid vh-100 d-flex justify-content-center align-items-center" style="padding-top: 80px;">
        <div class="row shadow-lg p-4" style="background-color: #fff; border-radius: 20px; border: 3px solid rgba(0, 0, 0, 0.1); width: 68%;">
            <!-- Bagian Kiri: Gambar dan Teks -->
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-center">
                <img src="{{ asset('images/labor_day_calendar.png') }}" alt="Register" class="img-fluid mb-3" style="max-width: 80%;">
                <h1 class="fw-bold text-dark">SELAMAT DATANG</h1>
                <h2 class="fw-bold text-danger" style="font-size: 2.5rem;">T-TABLERS</h2>
            </div>

            <!-- Bagian Kanan: Form Register -->
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div class="mb-3">
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="text-danger mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mb-3">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <x-input-label for="password" :value="__('Password')" />
                        <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="text-danger mt-2" />
                    </div>

                    <!-- Button Register -->
                    <div class="d-grid mt-3">
                        <button type="submit" class="btn btn-danger">{{ __('Register') }}</button>
                    </div>
                </form>

                <!-- Already Registered Link -->
                <div class="text-center mt-3">
                    <span>sudah punya akun? <a href="{{ route('login') }}" class="text-danger">masuk</a></span>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>