@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset($css) }}">
@endpush

@section('content')
    <div class="custom-table">
        <h1>Daftar Tugas</h1>
        <!-- Tabel atau konten tugas lainnya -->
    </div>
@endsection
