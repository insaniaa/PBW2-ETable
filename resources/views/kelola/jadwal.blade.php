<x-app-layout>
    <x-slot name="header">
        <div class="position-relative">
            <!-- Kotak Sambutan -->
            <div class="text-white p-4 rounded-4 d-flex align-items-center justify-content-between" style="background-color: #bc1010; height: 150px; border-radius: 20px; position: relative;">
                <div class="ms-5 ps-5">
                    <h1 class="fw-bold mb-2" style="font-size: 28px;">Selamat Datang Admin!</h1>
                    <p class="fw-medium mb-0" style="font-size: 20px;">Kelola jadwalnya yuk</p>
                </div>
                <img src="{{ asset('images/buku.png') }}" alt="Gambar Buku" 
                    style="width: 250px; height: auto; position: absolute; top: 50%; left: calc(100% - 350px); transform: translateY(-50%);">
            </div>
        </div>
    </x-slot>

    <style>
        .button-custom {
            padding: 10px 30px;
            border-radius: 10px;
        }

        select.form-select {
            color: #aaa;
            border: 1px solid #dcdcdc;
            border-radius: 8px;
            appearance: none;
            background: url("data:image/svg+xml;charset=UTF-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath fill='%23aaa' d='M7 10l5 5 5-5z'/%3E%3C/svg%3E") no-repeat right 10px center;
            background-color: #fff;
            background-size: 16px;
            padding-right: 30px;
        }

        select.form-select:focus {
            outline: none;
            border-color: #bc1010;
        }
    </style>

    <!-- Konten Utama -->
    <div class="container my-4">
        <!-- Form Tambah Jadwal -->
        <div id="tambah-jadwal-form" class="rounded-4 py-4 px-5 d-none" style="background-color: #ffe0e0; border-radius: 30px;">
            <h4 class="fw-bold text-dark mb-3">Tambah Data Jadwal</h4>
            <p class="text-muted mb-4">Tambahkan data jadwal yang akan dikelola</p>
            <!-- Form untuk input data -->
            <form method="POST" action="/tambah-jadwal">
                <div class="mb-3">
                    <select class="form-select" name="kelas" required>
                        <option value="" disabled selected>Pilih Kelas</option>
                        <option value="kelas_a">Kelas A</option>
                        <option value="kelas_b">Kelas B</option>
                        <option value="kelas_c">Kelas C</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="hari" required>
                        <option value="" disabled selected>Pilih Hari</option>
                        <option value="senin">Senin</option>
                        <option value="selasa">Selasa</option>
                        <option value="rabu">Rabu</option>
                        <option value="kamis">Kamis</option>
                        <option value="jumat">Jumat</option>
                    </select>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="mata_kuliah" required>
                        <option value="" disabled selected>Pilih Mata Kuliah</option>
                        <option value="pengembangan_profesionalisme">Pengembangan Profesionalisme</option>
                        <option value="sistem_basis_data_2">Sistem Basis Data 2</option>
                        <option value="pancasila">Pancasila</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="jam" placeholder="Pilih Jam" style="border-radius: 8px; border: 1px solid #dcdcdc;" required>
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control" name="kode_ruangan" placeholder="Kode Ruangan" style="border-radius: 8px; border: 1px solid #dcdcdc;" required>
                </div>
                <!-- Tombol Navigasi -->
                <div class="d-flex justify-content-between mt-5">
                    <button type="button" id="btn-back" class="btn btn-secondary button-custom">Back</button>
                    <button type="submit" class="btn text-white button-custom" style="background-color: #bc1010;">Save</button>
                </div>
            </form>
        </div>

        <!-- Kotak Kelola Jadwal -->
        <div id="kelola-jadwal" class="rounded-4 py-4 px-5" style="background-color: #ffe0e0; border-radius: 30px;">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold text-dark">Kelola Jadwal</h4>
                <button class="btn" id="btn-tambah-jadwal" style="background-color: #ffffff; color: #585858; border: 1px solid #dcdcdc; border-radius: 10px; padding: 5px 10px;">Tambah Jadwal</button>
            </div>
            <div class="table-responsive mt-3">
                <table class="table text-center" style="border: 1px solid #dcdcdc; border-collapse: collapse;">
                    <thead class="bg-light">
                        <tr>
                            <th style="width: 20%; border: 1px solid #dcdcdc; vertical-align: middle; text-align: center;">Kelas</th>
                            <th style="width: 80%; border: 1px solid #dcdcdc; position: relative;">
                                Jadwal
                                <div style="display: flex; border-top: 1px solid #dcdcdc; margin-top: 10px;">
                                    <div style="flex: 1; border-right: 1px solid #dcdcdc; padding: 5px;">Hari</div>
                                    <div style="flex: 1; border-right: 1px solid #dcdcdc; padding: 5px;">Mata Kuliah</div>
                                    <div style="flex: 1; border-right: 1px solid #dcdcdc; padding: 5px;">Jam</div>
                                    <div style="flex: 1; padding: 5px;">Ruangan</div>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border: 1px solid #dcdcdc;">
                            <td colspan="2" class="text-center py-5">
                                <img src="{{ asset('images/maskot-logo.png') }}" alt="Placeholder" class="mb-3" style="width: 100px;">
                                <p class="text-muted">Jadwal Masih Kosong Nih</p>
                            </td>
                        </tr>
                    </tbody>
                </table>                
            </div>
        </div>
    </div>

    <!-- Script untuk Toggle -->
    <script>
        document.getElementById('btn-tambah-jadwal').addEventListener('click', function () {
            document.getElementById('kelola-jadwal').classList.add('d-none');
            document.getElementById('tambah-jadwal-form').classList.remove('d-none');
        });

        document.getElementById('btn-back').addEventListener('click', function () {
            document.getElementById('tambah-jadwal-form').classList.add('d-none');
            document.getElementById('kelola-jadwal').classList.remove('d-none');
        });
    </script>
</x-app-layout>
