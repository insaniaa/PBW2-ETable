@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Tugas</h1>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Kelas</label>
                <input type="text" name="Kelas" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Matakuliah</label>
                <input type="text" name="Matakuliah" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Kode Dosen</label>
                <input type="text" name="kode_Dosen" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Due Date</label>
                <input type="date" name="due_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Deskripsi Tugas</label>
                <textarea name="deskripsi_tugas" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Simpan Tugas</button>
        </form>
    </div>
@endsection
