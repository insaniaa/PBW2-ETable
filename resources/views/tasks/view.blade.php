

@section('content')
    <x-layout>
        <main class="mt-5 max-w-lg-1680 mx-auto px-3 text-black" style="padding-top: 60px">
            <section class="w-100 py-3 font-sans">
                <div class="bg-danger w-20 h-20 rounded-3 d-flex align-items-center p-3" style="height: 140px;">
                    <div class="d-lg-flex w-100 justify-content-center text-white fw-bold gap-lg-5">
                        <div class="d-lg-flex flex-column justify-content-center me-lg-5">
                            <h1 class="fw-bold display-6">Welcome back, Vans!</h1>
                            <h2 class="fw-normal h4">Buat dan atur semua jadwalmu mulai dari sekarang.</h2>
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
                        <!-- Header -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="m-0">Daftar Tugas</h6>
                            
                        </div>

                        <!-- Tabel Tugas -->
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover mb-0">
                                        <thead style="background-color: #f8f9fa;">
                                            <tr>
                                                <th>Kelas</th>
                                                <th>Mata Kuliah</th>
                                                <th>Kode Dosen</th>
                                                <th>Tenggat Waktu</th>
                                                <th>Deskripsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tasks as $task)
                                                <tr>
                                                    <td>{{ $task->Kelas }}</td>
                                                    <td>{{ $task->Matakuliah }}</td>
                                                    <td>{{ $task->kode_Dosen }}</td>
                                                    <td>{{ $task->due_date }}</td>
                                                    <td>{{ $task->deskripsi_tugas }}</td>                                           
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
        </main>
    </x-layout>

