<x-dosen-layout title="Halaman Tugas">
    <x-slot name="header">
        <div class="position-relative">
            <div class="text-white p-4 rounded-4 d-flex align-items-center justify-content-between" style="background-color: #bc1010; height: 150px; border-radius: 20px; position: relative;">
                <div class="ms-5 ps-5">
                    <h1 class="fw-bold mb-2" style="font-size: 28px;">Selamat Datang Pak/Bu!</h1>
                    <p class="fw-medium mb-0" style="font-size: 20px;">Tambahkan tugas untuk hari ini</p>
                </div>
                <img src="{{ asset('images/buku.png') }}" alt="Gambar Buku" 
                    style="width: 250px; height: auto; position: absolute; top: 50%; left: calc(100% - 350px); transform: translateY(-50%);">
            </div>
        </div>
    </x-slot>

    <style>
        .form-control {
            border-radius: 8px;
            border: 1px solid #dcdcdc;
        }

        .form-select {
            color: #aaa;
            border: 1px solid #dcdcdc;
            border-radius: 8px;
            appearance: none;
            background: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath fill='%23aaa' d='M7 10l5 5 5-5z'/%3E%3C/svg%3E") no-repeat right 10px center;
            background-color: #fff;
            background-size: 16px;
            padding-right: 30px;
        }

        .form-select:focus {
            outline: none;
            border-color: #bc1010;
        }

        .button-custom {
            padding: 10px 30px;
            border-radius: 10px;
        }
    </style>

    <!-- Form Tambah Tugas -->
    <div class="container my-4">
        <div class="rounded-4 py-4 px-5" style="background-color: #ffe0e0; border-radius: 30px;">
            <h4 class="fw-bold text-dark mb-3">Tambah Tugas</h4>
            <p class="text-muted mb-4">Tambahkan data tugas yang akan dikelola</p>
            <!-- Form untuk input data -->
            <form method="POST" action="/tambah-tugas">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="judul_tugas" placeholder="Tambahkan Judul Tugas" required>
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control" name="tenggat_waktu" placeholder="Tenggat Waktu" required>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="mata_kuliah" required>
                        <option value="" disabled selected>Pilih Mata Kuliah</option>
                        <option value="matkul_1">Mata Kuliah 1</option>
                        <option value="matkul_2">Mata Kuliah 2</option>
                        <option value="matkul_3">Mata Kuliah 3</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="kelas" required>
                        <option value="" disabled selected>Pilih Kelas</option>
                        <option value="kelas_a">Kelas A</option>
                        <option value="kelas_b">Kelas B</option>
                        <option value="kelas_c">Kelas C</option>
                    </select>
                </div>
                <!-- Tombol Navigasi -->
                <div class="d-flex justify-content-between mt-5">
                    <a href="{{ route('dosen.beranda') }}" class="btn btn-secondary button-custom">Back</a>
                    <button type="submit" class="btn text-white button-custom" style="background-color: #bc1010;">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-dosen-layout>
