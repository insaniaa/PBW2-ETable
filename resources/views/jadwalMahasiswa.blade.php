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

        <!-- View -->
<div class="container-fluid py-4">
    <div class="position-relative carousel-container">
        <!-- Tanggal & Controls -->
        <div class="d-flex justify-content-between align-items-center bg-danger text-white p-3 rounded-top">
            <button class="btn text-white" data-bs-target="#scheduleCarousel" data-bs-slide="prev">
                <i class="bi bi-chevron-left"></i>
            </button>
            <h5 class="m-0">Senin, 03 Maret 2024</h5>
            <button class="btn text-white" data-bs-target="#scheduleCarousel" data-bs-slide="next">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>

        <!-- Carousel -->
        <div id="scheduleCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner py-4">
                @foreach($jadwals as $index => $jadwal)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="d-flex">
                       
                        <!-- Current Item -->
                        <div class="schedule-card main-card">
                            <div class="card border-0 bg-white rounded-4 p-3">
                                <div class="row align-items-center">
                                    <!-- Icon -->
                                    <div class="col-auto">
                                        <img src="/path/to/rocket-icon.svg" alt="Icon" class="schedule-icon">
                                    </div>
                                    <!-- Content -->
                                    <div class="col">
                                        <h5 class="mb-3">{{ $jadwal->nama_matkul }}</h5>
                                        <div class="d-flex flex-wrap gap-4">
                                            <div>
                                                <div class="text-muted small">Waktu</div>
                                                <div>{{ $jadwal->waktu }}</div>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Ruangan</div>
                                                <div>{{ $jadwal->ruangan }}</div>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Kode dosen</div>
                                                <div>{{ $jadwal->kode_dosen }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
.carousel-container {
    max-width: 1200px;
    margin: 0 auto;
    overflow: hidden;
}

.schedule-card {
    flex: 0 0 auto;
    width: calc(100% - 200px); /* Sesuaikan dengan lebar yang diinginkan */
    transition: all 0.3s ease;
}

.blur-card {
    opacity: 0.5;
    filter: blur(2px);
    transform: scale(0.9);
    pointer-events: none;
    width: 100px; /* Lebar untuk preview cards */
}

.main-card {
    transform: scale(1);
    z-index: 1;
}

.schedule-icon {
    width: 60px;
    height: 60px;
}

/* Custom carousel controls */
.carousel-control-prev,
.carousel-control-next {
    width: 40px;
    height: 40px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
}

/* Hapus background default dari carousel controls */
.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: transparent;
}

/* Animasi transisi */
.carousel-item {
    transition: transform 0.6s ease-in-out;
}

/* Responsive */
@media (max-width: 768px) {
    .blur-card {
        width: 50px;
    }
    
    .schedule-card {
        width: calc(100% - 100px);
    }
}
</style>

<script>
// Tambahkan script untuk mengatur carousel
document.addEventListener('DOMContentLoaded', function() {
    var carousel = new bootstrap.Carousel(document.getElementById('scheduleCarousel'), {
        interval: false, // Matikan auto-slide
        wrap: true // Enable circular carousel
    });
});
</script>

    </x-layout>
</body>
</html>