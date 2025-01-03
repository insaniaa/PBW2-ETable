<x-layout>
    <x-slot name="title">Dashboard Mahasiswa</x-slot>

    <!-- Kotak Sambutan -->
    <div class="container-fluid mt-4">
        <div class="bg-danger text-white p-4 rounded-4 d-flex align-items-center justify-content-between shadow" style="height: 150px;">
            <div class="ms-5 ps-5">
                <h1 class="fw-bold mb-2" style="font-size: 28px;">Welcome back, Salma Nur Azizah!</h1>
                <p class="fw-medium mb-0" style="font-size: 20px;">Buat dan atur semua jadwalmu mulai dari sekarang.</p>
            </div>
            <img src="{{ asset('images/buku.png') }}" alt="Gambar Buku" style="width: 250px; height: auto;">
        </div>
    </div>

    <!-- Container Pink -->
    <div class="container mt-5">
        <div class="rounded-4 py-4 px-5 shadow-sm" style="background-color: #FFE0E0; border-radius: 20px;">
            <!-- Jadwal Kuliah Hari Ini -->
            <h4 class="fw-bold mb-3 text-danger">Jadwal Kuliah Hari Ini</h4>
            <div class="row g-3 mb-5">
                <div class="col-md-4">
                    <div class="card text-white shadow-sm jadwal-card" style="background-color: #BC1010; border-radius: 20px;">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Sistem Basis Data 1</h5>
                            <p>Waktu: <strong>07:30 - 09:30</strong></p>
                            <p>Ruangan: <strong>B3</strong></p>
                            <p>Kode Dosen: <strong>CSO</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white shadow-sm jadwal-card" style="background-color: #BC1010; border-radius: 20px;">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Bahasa Inggris</h5>
                            <p>Waktu: <strong>09:45 - 11:15</strong></p>
                            <p>Ruangan: <strong>C2</strong></p>
                            <p>Kode Dosen: <strong>GMG</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white shadow-sm jadwal-card" style="background-color: #BC1010; border-radius: 20px;">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Pemrograman Berbasis Web</h5>
                            <p>Waktu: <strong>13:00 - 15:00</strong></p>
                            <p>Ruangan: <strong>A1</strong></p>
                            <p>Kode Dosen: <strong>HMU</strong></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tugas Hari Ini -->
            <h4 class="fw-bold mb-3 text-danger">Tugas Hari Ini</h4>
            <table class="table table-hover align-middle text-center">
                <thead class="text-white" style="background-color: #BC1010;">
                    <tr>
                        <th>Kelas</th>
                        <th>Mata Kuliah</th>
                        <th>Kode Dosen</th>
                        <th>Modul Materi</th>
                        <th>Tugas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="background-color: #F5F5F5;">
                        <td>D3IF-47-01</td>
                        <td>Sistem Basis Data 1</td>
                        <td>CSO</td>
                        <td><a href="#" class="btn btn-sm btn-outline-danger">Download Modul</a></td>
                        <td><a href="#" class="btn btn-sm btn-outline-danger">Download Tugas</a></td>
                    </tr>
                    <tr style="background-color: #FFFFFF;">
                        <td>D3IF-47-02</td>
                        <td>Bahasa Inggris</td>
                        <td>GMG</td>
                        <td><a href="#" class="btn btn-sm btn-outline-danger">Download Modul</a></td>
                        <td><a href="#" class="btn btn-sm btn-outline-danger">Download Tugas</a></td>
                    </tr>
                    <tr style="background-color: #F5F5F5;">
                        <td>D3IF-47-03</td>
                        <td>Pemrograman Berbasis Web</td>
                        <td>HMU</td>
                        <td><a href="#" class="btn btn-sm btn-outline-danger">Download Modul</a></td>
                        <td><a href="#" class="btn btn-sm btn-outline-danger">Download Tugas</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer Margin -->
    <div class="container mt-5"></div>
</x-layout>

<style>
    .jadwal-card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .jadwal-card:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
</style>
