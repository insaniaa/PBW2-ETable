@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Tugas</h1>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Kelas</label>
                <input type="text" name="Kelas" class="form-control" value="{{ $task->Kelas }}" required>
            </div>
            <div class="form-group">
                <label>Matakuliah</label>
                <input type="text" name="Matakuliah" class="form-control" value="{{ $task->Matakuliah }}" required>
            </div>
            <div class="form-group">
                <label>Kode Dosen</label>
                <input type="text" name="kode_Dosen" class="form-control" value="{{ $task->kode_Dosen }}" required>
            </div>
            <div class="form-group">
                <label>Due Date</label>
                <input type="date" name="due_date" class="form-control" value="{{ $task->due_date }}" required>
            </div>
            <div class="form-group">
                <label>Deskripsi Tugas</label>
                <textarea name="deskripsi_tugas" class="form-control">{{ $task->deskripsi_tugas }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-2">Update Tugas</button>
        </form>
    </div>
@endsection
