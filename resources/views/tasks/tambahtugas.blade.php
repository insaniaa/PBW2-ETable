@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h2>Tambah Tugas Baru</h2>
        
        <!-- Form untuk Menambah Tugas -->
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" name="Kelas" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="matakuliah" class="form-label">Mata Kuliah</label>
                <input type="text" name="Matakuliah" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="kode_dosen" class="form-label">Kode Dosen</label>
                <input type="text" name="kode_dosen" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="due_date" class="form-label">Tenggat Waktu</label>
                <input type="date" name="due_date" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi_tugas" class="form-label">Deskripsi</label>
                <textarea name="deskripsi_tugas" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Tugas</button>
        </form>
    </div>
@endsection
