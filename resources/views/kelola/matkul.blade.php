<x-app-layout>
    <x-slot name="header">
        <div class="position-relative">
            <div class="text-white p-4 rounded-4 d-flex align-items-center justify-content-between" style="background-color: #bc1010; height: 150px; border-radius: 20px; position: relative;">
                <div class="ms-5 ps-5">
                    <h1 class="fw-bold mb-2" style="font-size: 28px;">Selamat Datang Admin!</h1>
                    <p class="fw-medium mb-0" style="font-size: 20px;">Ayo kelola mata kuliah yang ada</p>
                </div>
                <img src="{{ asset('images/buku.png') }}" alt="Gambar Buku" 
                    style="width: 250px; height: auto; position: absolute; top: 50%; left: calc(100% - 350px); transform: translateY(-50%);">
            </div>
        </div>
    </x-slot>

    <style>
        .table th, .table td {
            width: 25%;
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
    </style>

    <div class="container my-4">
        <!-- Form Tambah Mata Kuliah -->
        <div id="tambah-matkul-form" class="rounded-4 py-4 px-5 d-none" style="background-color: #ffe0e0; border-radius: 30px;">
            <h4 class="fw-bold text-dark mb-3">Tambah Data Mata Kuliah</h4>
            <p class="text-muted mb-4">Tambahkan data mata kuliah yang akan dikelola</p>
            <form id="matkulForm" action="" method="POST">
                @csrf <!-- Tambahkan CSRF Token untuk keamanan -->
                <div class="mb-3">
                    <input type="text" name="kode_matkul" class="form-control" placeholder="Kode Mata Kuliah" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="nama_matkul" class="form-control" placeholder="Nama Mata Kuliah" required>
                </div>
                <div class="mb-3">
                    <input type="number" name="sks" class="form-control" placeholder="Jumlah SKS" min="1" required>
                </div>
                <div class="mb-4">
                    <input type="text" name="kode_dosen" class="form-control" placeholder="Kode Dosen" required>
                </div>
                <div class="d-flex justify-content-between mt-5">
                    <button type="button" id="btn-back" class="btn btn-secondary button-custom">Back</button>
                    <button type="submit" class="btn text-white button-custom" style="background-color: #bc1010;">Save</button>
                </div>                                
            </form>
        </div>

        <!-- Kotak Kelola Mata Kuliah -->
        <div id="kelola-matkul" class="rounded-4 py-4 px-5" style="background-color: #ffe0e0; border-radius: 30px;">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold text-dark">Kelola Mata Kuliah</h4>
                <button class="btn" id="btn-tambah-matkul" style="background-color: #ffffff; color: #585858; border: 1px solid #dcdcdc; border-radius: 10px;">Tambah Mata Kuliah</button>
            </div>
            <div class="table-responsive mt-3">
                <table class="table table-bordered">
                    <thead class="bg-light">
                        <tr>
                            <th>Kode Mata Kuliah</th>
                            <th>Nama Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Kode Dosen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4" class="text-center py-5">
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
        document.getElementById('btn-tambah-matkul').addEventListener('click', function () {
            document.getElementById('kelola-matkul').classList.add('d-none'); // Sembunyikan kotak Kelola Mata Kuliah
            document.getElementById('tambah-matkul-form').classList.remove('d-none'); // Tampilkan form Tambah Mata Kuliah
        });

        document.getElementById('btn-back').addEventListener('click', function () {
            document.getElementById('tambah-matkul-form').classList.add('d-none'); // Sembunyikan form Tambah Mata Kuliah
            document.getElementById('kelola-matkul').classList.remove('d-none'); // Tampilkan kotak Kelola Mata Kuliah
        });

        // Validasi form
        document.getElementById('matkulForm').addEventListener('submit', function (event) {
            const inputs = document.querySelectorAll('#matkulForm input');
            let isValid = true;
            inputs.forEach(input => {
                if (!input.value) {
                    isValid = false;
                    input.style.borderColor = 'red';
                } else {
                    input.style.borderColor = '#dcdcdc';
                }
            });
            if (!isValid) {
                event.preventDefault(); // Hentikan submit jika ada field kosong
                alert('Harap isi semua field!');
            }
        });
    </script>
</x-app-layout>
