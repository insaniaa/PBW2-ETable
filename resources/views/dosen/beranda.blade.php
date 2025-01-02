<x-dosen-layout title="Beranda Dosen">
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
        .table th, .table td {
            width: 20%; /* Semua kolom memiliki lebar yang sama */
            text-align: center;
            vertical-align: middle;
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #dcdcdc;
        }

        .button-custom {
            padding: 10px 30px;
            border-radius: 10px;
        }

        .header-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>

    <div class="container my-4">
        <!-- Kotak Kelola Mata Kuliah -->
        <div id="kelola-matkul" class="rounded-4 py-4 px-5" style="background-color: #ffe0e0; border-radius: 30px;">
            <div class="header-row mb-4">
                <h4 class="fw-bold text-dark">Tugas Hari Ini</h4>
                <<a href="{{ route('dosen.tugas') }}" class="btn" style="background-color: #ffffff; color: #585858; border: 1px solid #dcdcdc; border-radius: 10px;">Buat Tugas</a>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead class="bg-light">
                        <tr>
                            <th>Kelas</th>
                            <th>Mata Kuliah</th>
                            <th>Tenggat Waktu</th>
                            <th>Tugas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="5" class="text-center py-5">
                                <img src="{{ asset('images/maskot-logo.png') }}" alt="Placeholder" class="mb-3" style="width: 100px;">
                                <p class="text-muted">Kelas Masih Kosong Nih</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-dosen-layout>
