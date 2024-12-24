<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .max-w-lg-1680 {
            max-width: 1680px;
        }
        .pt-lg-79 {
            padding-top: 10px;
        }
        .main-height {
            height: 630px;
        }

    .card {
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

.table th, .table td {
    padding: 1rem;
    vertical-align: middle;
}

.btn-link {
    text-decoration: none;
}

.btn-link:hover {
    opacity: 0.8;
}

    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .content-wrapper {
        flex: 1 0 auto; /* Akan mengambil space yang tersedia */
        position: relative;
        z-index: 1;
        background-color: #ffefef; /* Sesuaikan dengan warna background section Anda */
        padding-bottom: 2rem; /* Tambahkan padding bottom agar ada jarak dengan footer */
    }

    footer {
        flex-shrink: 0; /* Prevents the footer from shrinking */
        position: relative;
        z-index: 2;
        width: 100%;
    }

    /* Style lainnya dari section Anda */
    .card {
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }

    .table th, .table td {
        padding: 1rem;
        vertical-align: middle;
    }

    .btn-link {
        text-decoration: none;
    }

    .btn-link:hover {
        opacity: 0.8;
    }

    </style>

</head>
<body>
    <x-layout>

        
        <main class="mt-5 max-w-lg-1680 mx-auto px-3 text-black " style="padding-top: 60px">


            <section class="w-100 py-3 font-sans">
                <div class="bg-danger w-20 h-20 rounded-3 d-flex align-items-center p-3" style="height: 140px;">
                    <div class="d-lg-flex w-100 justify-content-center text-white fw-bold gap-lg-5">
                        <div class="d-lg-flex flex-column justify-content-center me-lg-5">
                            <h1 class="fw-bold display-6">Welcome back, Vans!</h1>
                            <h2 class="fw-normal h4">Buat dan atur semua jadwalmu mulai dari sekarangg.</h2>
                        </div>
                        <div>
                            <img class="img-fluid" src="{{ asset('img/buku-beranda.png') }}" alt="gambar buku" style="transform: scale(0.5);">
                        </div>
                    </div>
                </div>
            </section>

           {{-- resources/views/jadwal/section.blade.php --}}


            
<div class="container py-4">
    <div class="card border-0" style="background-color: #ffefef;">
        <div class="card-body">
            <!-- Header dengan Tanggal -->
            <div class="d-flex justify-content-end mb-3">
                <h6 class="m-0" style="color: #666;">Senin, 03 Maret 2024</h6>
            </div>
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="m-0" style="color: #333;">Jadwal Hari Ini</h6>
                
            </div>

            <!-- Card Jadwal -->
            <div class="row g-3 mb-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card border-0" style="background: linear-gradient(45deg, #dc3545, #cd2f3e);">
                        <div class="card-body text-white">
                            <h6 class="mb-3">SISTEM BASIS DATA 1</h6>
                            <div class="d-flex flex-column gap-1">
                                <div>
                                    <div style="font-size: 0.875rem;">Waktu</div>
                                    <div style="font-size: 0.875rem;">07:30-09:30</div>
                                </div>
                                <div>
                                    <div style="font-size: 0.875rem;">Ruangan</div>
                                    <div style="font-size: 0.875rem;">B3</div>
                                </div>
                                <div>
                                    <div style="font-size: 0.875rem;">Kelas</div>
                                    <div style="font-size: 0.875rem;">D3IF-47-01</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card border-0" style="background: linear-gradient(45deg, #dc3545, #cd2f3e);">
                        <div class="card-body text-white">
                            <h6 class="mb-3">SISTEM BASIS DATA 1</h6>
                            <div class="d-flex flex-column gap-1">
                                <div>
                                    <div style="font-size: 0.875rem;">Waktu</div>
                                    <div style="font-size: 0.875rem;">07:30-09:30</div>
                                </div>
                                <div>
                                    <div style="font-size: 0.875rem;">Ruangan</div>
                                    <div style="font-size: 0.875rem;">B3</div>
                                </div>
                                <div>
                                    <div style="font-size: 0.875rem;">Kelas</div>
                                    <div style="font-size: 0.875rem;">D3IF-47-02</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card border-0" style="background: linear-gradient(45deg, #dc3545, #cd2f3e);">
                        <div class="card-body text-white">
                            <h6 class="mb-3">SISTEM BASIS DATA 1</h6>
                            <div class="d-flex flex-column gap-1">
                                <div>
                                    <div style="font-size: 0.875rem;">Waktu</div>
                                    <div style="font-size: 0.875rem;">07:30-09:30</div>
                                </div>
                                <div>
                                    <div style="font-size: 0.875rem;">Ruangan</div>
                                    <div style="font-size: 0.875rem;">B3</div>
                                </div>
                                <div>
                                    <div style="font-size: 0.875rem;">Kelas</div>
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
                    
                </div>

                <!-- Table -->
                <div class="card border-0">
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead style="background-color: #f8f9fa;">
                                    <tr>
                                        <th style="font-weight: 500;">Kelas</th>
                                        <th style="font-weight: 500;">Mata Kuliah</th>
                                        <th style="font-weight: 500;">Kode Dosen</th>
                                        <th style="font-weight: 500;">Tenggat waktu</th>
                                        <th style="font-weight: 500;">Desk</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $kelas = ['01', '02', '03', '04'];
                                    @endphp

                                    @foreach($kelas as $k)
                                    <tr>
                                        <td>D3IF-47-{{ $k }}</td>
                                        <td>Sistem Basis Data 1</td>
                                        <td>CAH</td>
                                        <td>Senin</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button class="btn btn-link btn-sm p-0 text-secondary">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-link btn-sm p-0 text-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
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
        


    </x-layout>
</body>
</html>