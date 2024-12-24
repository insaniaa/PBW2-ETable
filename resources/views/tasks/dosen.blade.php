<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-layout>
        <main class="mt-5 max-w-lg-1680 mx-auto px-3 text-black" style="padding-top: 60px">

            <section class="w-100 py-3 font-sans">
                <div class="bg-danger w-20 h-20 rounded-3 d-flex align-items-center p-3" style="height: 140px;">
                    <div class="d-lg-flex w-100 justify-content-center text-white fw-bold gap-lg-5">
                        <div class="d-lg-flex flex-column justify-content-center me-lg-5">
                            <h1 class="fw-bold display-6">Welcome back, PakK!</h1>
                            <h2 class="fw-normal h4">Buat dan atur semua jadwalmu mulai dari sekarangg.</h2>
                        </div>
                        <div>
                            <img class="img-fluid" src="{{ asset('img/buku-beranda.png') }}" alt="gambar buku" style="transform: scale(0.5);">
                        </div>
                    </div>
                </div>
            </section>

            
            <div class="container py-4">
                <div class="card border-0" style="background-color: #ffefef;">
                    <div class="card-body">
                        <!-- Header dengan Tanggal -->
                        <div class="d-flex justify-content-end mb-3">
                            <h6 class="m-0" style="color: #666;">Senin, 03 Maret 2024</h6>
                        </div>
        
                        <!-- Jadwal Hari Ini -->
                        <h6 class="mb-3" style="color: #333;">Jadwal Hari Ini</h6>
        
                        <!-- Card Jadwal -->
                        <div class="row g-3 mb-4">
                            <!-- Card 1 -->
                            <div class="col-md-4">
                                <div class="card border-0" style="background: linear-gradient(45deg, #dc3545, #cd2f3e); border-radius: 12px;">
                                    <div class="card-body text-white p-4">
                                        <h6 class="mb-3 fw-bold">SISTEM BASIS DATA 1</h6>
                                        <div class="d-flex flex-column gap-2">
                                            <div>
                                                <div style="font-size: 0.875rem; opacity: 0.8">Waktu</div>
                                                <div style="font-size: 0.875rem;">07:30-09:30</div>
                                            </div>
                                            <div>
                                                <div style="font-size: 0.875rem; opacity: 0.8">Ruangan</div>
                                                <div style="font-size: 0.875rem;">B3</div>
                                            </div>
                                            <div>
                                                <div style="font-size: 0.875rem; opacity: 0.8">Kelas</div>
                                                <div style="font-size: 0.875rem;">D3IF-47-01</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <!-- Card 2 -->
                            <div class="col-md-4">
                                <div class="card border-0" style="background: linear-gradient(45deg, #dc3545, #cd2f3e); border-radius: 12px;">
                                    <div class="card-body text-white p-4">
                                        <h6 class="mb-3 fw-bold">SISTEM BASIS DATA 1</h6>
                                        <div class="d-flex flex-column gap-2">
                                            <div>
                                                <div style="font-size: 0.875rem; opacity: 0.8">Waktu</div>
                                                <div style="font-size: 0.875rem;">07:30-09:30</div>
                                            </div>
                                            <div>
                                                <div style="font-size: 0.875rem; opacity: 0.8">Ruangan</div>
                                                <div style="font-size: 0.875rem;">B3</div>
                                            </div>
                                            <div>
                                                <div style="font-size: 0.875rem; opacity: 0.8">Kelas</div>
                                                <div style="font-size: 0.875rem;">D3IF-47-02</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <!-- Card 3 -->
                            <div class="col-md-4">
                                <div class="card border-0" style="background: linear-gradient(45deg, #dc3545, #cd2f3e); border-radius: 12px;">
                                    <div class="card-body text-white p-4">
                                        <h6 class="mb-3 fw-bold">SISTEM BASIS DATA 1</h6>
                                        <div class="d-flex flex-column gap-2">
                                            <div>
                                                <div style="font-size: 0.875rem; opacity: 0.8">Waktu</div>
                                                <div style="font-size: 0.875rem;">07:30-09:30</div>
                                            </div>
                                            <div>
                                                <div style="font-size: 0.875rem; opacity: 0.8">Ruangan</div>
                                                <div style="font-size: 0.875rem;">B3</div>
                                            </div>
                                            <div>
                                                <div style="font-size: 0.875rem; opacity: 0.8">Kelas</div>
                                                <div style="font-size: 0.875rem;">D3IF-47-03</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!-- Tugas Section -->
                        <div>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h6 class="m-0">Tugas</h6>
                                <a href="{{ route('tasks.create') }}" class="btn btn-primary">Tambah Tugas</a>
                                
                            </div>
        
                            <!-- Table -->
                            <div class="card border-0">
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead>
                                                <tr style="background-color: #fff;">
                                                    <th style="font-weight: 500;">Kelas</th>
                                                    <th style="font-weight: 500;">Mata Kuliah</th>
                                                    <th style="font-weight: 500;">Tengat Waktu</th>
                                                    <th style="font-weight: 500;">Tugas</th>
                                                    <th style="font-weight: 500;">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>D3IF-47-01</td>
                                                    <td>Sistem Basis Data 1</td>
                                                    <td>7 November 2024</td>
                                                    <td>Jurnal 5</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <button class="btn btn-link btn-sm p-0">
                                                                <i class="bi bi-pencil"></i>
                                                            </button>
                                                            <button class="btn btn-link btn-sm p-0 text-danger">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>D3IF-47-02</td>
                                                    <td>Sistem Basis Data 1</td>
                                                    <td>8 November 2024</td>
                                                    <td>Jurnal 5</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <button class="btn btn-link btn-sm p-0">
                                                                <i class="bi bi-pencil"></i>
                                                            </button>
                                                            <button class="btn btn-link btn-sm p-0 text-danger">
                                                                <i class="bi bi-trash"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <!-- Tambahkan baris lainnya sesuai kebutuhan -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <style>
        /* Tambahkan CSS untuk mengatur tampilan */
        .table th, .table td {
            padding: 1rem;
            vertical-align: middle;
            border: none;
        }
        
        .table tbody tr:hover {
            background-color: #f8f9fa;
        }
        
        .btn-link {
            color: #666;
            text-decoration: none;
        }
        
        .btn-link:hover {
            opacity: 0.8;
        }
        </style>
    </x-layout>
</body>
</html>