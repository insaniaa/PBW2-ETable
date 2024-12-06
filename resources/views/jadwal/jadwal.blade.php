<x-layout>
    <div class="container mt-5">
    <h3>Input Jadwal</h3>
    <form action="{{ route('jadwal.store') }}" method="POST">
        @csrf
        <!-- Input Hari -->
    <div class="mb-3">
        <label for="hari" class="form-label">Hari</label>
        <select class="form-select" id="hari" name="hari" required>
            <option selected disabled value="">Pilih Hari</option>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
            <option value="Sabtu">Sabtu</option>
        </select>
    </div>

    <!-- Input Tanggal -->
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal" required>
    </div>

    <!-- Input Jam -->
    <div class="mb-3">
        <label for="jam" class="form-label">Jam</label>
        <input type="time" class="form-control" id="jam" name="jam" required>
    </div>

    <!-- Input Mata Kuliah -->
    <div class="mb-3">
        <label for="mataKuliah" class="form-label">Mata Kuliah</label>
        <input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah" placeholder="Nama Mata Kuliah" required>
    </div>

    <!-- Input Kode Dosen -->
    <div class="mb-3">
        <label for="kodeDosen" class="form-label">Kode Dosen</label>
        <input type="text" class="form-control" id="kode_dosen" name="kode_dosen" placeholder="Kode Dosen" required>
    </div>

    <!-- Input Kode Ruangan -->
    <div class="mb-3">
        <label for="kodeRuangan" class="form-label">Kode Ruangan</label>
        <input type="text" class="form-control" id="kode_ruangan" name="kode_ruangan" placeholder="Kode Ruangan" required>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Simpan Jadwal</button>

        </form>
        </div>

</x-layout>