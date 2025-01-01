<x-app-layout>
    <x-slot name="header">
        <div class="position-relative">
            <!-- Kotak Sambutan -->
            <div class="text-white p-4 rounded-4 d-flex align-items-center justify-content-between" style="background-color: #bc1010; height: 150px; border-radius: 20px; position: relative;">
                <div class="ms-5 ps-5">
                    <h1 class="fw-bold mb-2" style="font-size: 28px;">Selamat Datang Admin!</h1>
                    <p class="fw-medium mb-0" style="font-size: 20px;">Tambah Data User Baru</p>
                </div>
                <img src="{{ asset('images/buku.png') }}" alt="Gambar Buku" 
                    style="width: 250px; height: auto; position: absolute; top: 50%; left: calc(100% - 350px); transform: translateY(-50%);">
            </div>
        </div>
    </x-slot>

    <div class="container my-4">
        <!-- Form Tambah User -->
        <div class="rounded-4 py-4 px-5" style="background-color: #ffe0e0; border-radius: 30px;">
            <h4 class="fw-bold text-dark mb-3">Tambah Data User</h4>
            <p class="text-muted mb-4">Tambahkan data user yang akan dikelola</p>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Ada beberapa masalah dengan input Anda.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Nama" required>
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="confirm-password" class="form-control" placeholder="Konfirmasi Password" required>
                </div>
                <div class="mb-4">
                    <select name="roles[]" class="form-control" multiple="multiple">
                        @foreach ($roles as $value => $label)
                            <option value="{{ $value }}">{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex justify-content-between mt-5">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary button-custom">Back</a>
                    <button type="submit" class="btn text-white button-custom" style="background-color: #bc1010;">Save</button>
                </div>
            </form>
        </div>
    </div>

    <style>
        .button-custom {
            padding: 10px 30px;
            border-radius: 10px;
        }
    </style>
</x-app-layout>
