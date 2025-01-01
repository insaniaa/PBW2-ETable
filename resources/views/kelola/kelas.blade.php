<x-app-layout>
    <x-slot name="header">
        <div class="position-relative">
            <!-- Kotak Sambutan -->
            <div class="text-white p-4 rounded-4 d-flex align-items-center justify-content-between" style="background-color: #bc1010; height: 150px; border-radius: 20px; position: relative;">
                <div class="ms-5 ps-5">
                    <h1 class="fw-bold mb-2" style="font-size: 28px;">Selamat Datang Admin!</h1>
                    <p class="fw-medium mb-0" style="font-size: 20px;">Ayo kelola kelasnya yuk</p>
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
    </style>

    <!-- Konten Utama -->
    <div class="container my-4">
        <!-- Kotak Tambah Kelas -->
        <div id="tambah-kelas-form" class="rounded-4 py-4 px-5 d-none" style="background-color: #ffe0e0; border-radius: 30px;">
            <h4 class="fw-bold text-dark mb-3">Tambah Data Kelas</h4>
            <p class="text-muted mb-4">Tambahkan data kelas yang akan dikelola</p>
            <!-- Tambahkan elemen form -->
            <form action="/tambah-kelas" method="POST" onsubmit="return validateForm()">
                @csrf <!-- Tambahkan CSRF Token untuk keamanan -->
                <div class="mb-3">
                    <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Tambah Kelas" style="border-radius: 8px; border: 1px solid #dcdcdc;" required>
                </div>
                <div class="mb-4">
                    <input type="text" name="kode_kelas" id="kode_kelas" class="form-control" placeholder="Tambah Kode Kelas" style="border-radius: 8px; border: 1px solid #dcdcdc;" required>
                </div>
                <div class="d-flex justify-content-between mt-5">
                    <button type="button" id="btn-back" class="btn btn-secondary button-custom">Back</button>
                    <button type="submit" class="btn text-white button-custom" style="background-color: #bc1010;">Save</button>
                </div>
            </form>
        </div>        

        <!-- Kotak Kelola Kelas -->
        <div id="kelola-kelas" class="rounded-4 py-4 px-5" style="background-color: #ffe0e0; border-radius: 30px;">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold text-dark">Kelola Kelas</h4>
                <button class="btn" id="btn-tambah-kelas" style="background-color: #ffffff; color: #585858; border: 1px solid #dcdcdc; border-radius: 10px; padding: 5px 10px;">Tambah Kelas</button>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-bordered text-center">
                    <thead class="bg-light">
                        <tr>
                            <th style="width: 50%;">Kelas</th>
                            <th style="width: 50%;">Kode Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2" class="text-center py-5">
                                <img src="{{ asset('images/maskot-logo.png') }}" alt="Placeholder" class="mb-3" style="width: 100px;">
                                <p class="text-muted">Kelas Masih Kosong Nih</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Script untuk Toggle -->
    <script>
        document.getElementById('btn-tambah-kelas').addEventListener('click', function () {
            document.getElementById('kelola-kelas').classList.add('d-none'); // Sembunyikan kotak Kelola Kelas
            document.getElementById('tambah-kelas-form').classList.remove('d-none'); // Tampilkan form Tambah Kelas
        });

        document.getElementById('btn-back').addEventListener('click', function () {
            document.getElementById('tambah-kelas-form').classList.add('d-none'); // Sembunyikan form Tambah Kelas
            document.getElementById('kelola-kelas').classList.remove('d-none'); // Tampilkan kotak Kelola Kelas
        });

        // Validasi input sebelum submit
        function validateForm() {
            const kelas = document.getElementById('kelas').value.trim();
            const kodeKelas = document.getElementById('kode_kelas').value.trim();

            if (!kelas || !kodeKelas) {
                alert('Semua kolom harus diisi!');
                return false; // Jangan lanjutkan submit
            }
            return true;
        }
    </script>
</x-app-layout>
