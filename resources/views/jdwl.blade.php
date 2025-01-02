<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kuliah</title>
    <!-- Bootstrap CSS dan Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            background-color: #ffefef;
            min-height: 100vh;
            padding: 20px;
        }

        .carousel-container {
            max-width: 1200px;
            margin: 0 auto;
            overflow: hidden;
            position: relative;
            background-color: #dc3545;
            border-radius: 15px;
        }

        .header-date {
            padding: 1rem;
            color: white;
        }

        .carousel-inner {
            background-color: #ffefef;
            border-radius: 0 0 15px 15px;
        }

        .schedule-card {
            flex: 0 0 auto;
            width: calc(100% - 200px);
            transition: all 0.3s ease;
        }

        .blur-card {
            opacity: 0.5;
            filter: blur(2px);
            transform: scale(0.9);
            pointer-events: none;
            width: 100px;
        }

        .main-card {
            transform: scale(1);
            z-index: 1;
        }

        .schedule-content {
            background: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        /* Gambar roket dengan SVG inline */
        .rocket-icon {
            width: 80px;
            height: 80px;
            fill: #dc3545;
        }

        .btn-nav {
            background: none;
            border: none;
            color: white;
            padding: 10px;
        }

        .btn-nav:hover {
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .blur-card {
                width: 50px;
            }
            
            .schedule-card {
                width: calc(100% - 100px);
            }

            body {
                padding: 10px;
            }
        }
    </style>
    </head>
    <body>
    <div class="carousel-container">
        <!-- Header dengan Tanggal -->
        <div class="header-date d-flex justify-content-between align-items-center">
            <button class="btn-nav" data-bs-target="#scheduleCarousel" data-bs-slide="prev">
                <i class="bi bi-chevron-left fs-4"></i>
            </button>
            <h5 class="m-0">Senin, 03 Maret 2024</h5>
            <button class="btn-nav" data-bs-target="#scheduleCarousel" data-bs-slide="next">
                <i class="bi bi-chevron-right fs-4"></i>
            </button>
        </div>

        <!-- Carousel -->
        <div id="scheduleCarousel" class="carousel slide" data-bs-ride="false" data-bs-interval="false">
            <div class="carousel-inner py-4">
                <!-- Item 1 -->
                <div class="carousel-item active">
                    <div class="d-flex justify-content-center">
                        <!-- Previous Blurred Card -->
                        <div class="schedule-card blur-card me-3">
                            <div class="schedule-content">
                                <div class="d-flex">
                                    <svg class="rocket-icon me-3" viewBox="0 0 24 24">
                                        <!-- Rocket SVG path -->
                                        <path d="M12 2C8 2 4 6 4 10C4 14 8 18 12 18C16 18 20 14 20 10C20 6 16 2 12 2M12 4C14.8 4 17 6.2 17 9C17 11.8 14.8 14 12 14C9.2 14 7 11.8 7 9C7 6.2 9.2 4 12 4M12 6C10.3 6 9 7.3 9 9C9 10.7 10.3 12 12 12C13.7 12 15 10.7 15 9C15 7.3 13.7 6 12 6M12 20L12.3 20.1C12.1 20 11.9 20 12 20M12 20C9.8 20 7.6 19.7 5.4 19.1C4.5 18.8 4 18 4 17.1V15H6V17C7.9 17.5 9.9 17.8 12 17.8C14.1 17.8 16.1 17.5 18 17V15H20V17.1C20 18 19.5 18.8 18.6 19.1C16.4 19.7 14.2 20 12 20Z"/>
                                    </svg>
                                    <div>
                                        <h5>PEMROGRAMAN BERBASIS WEB</h5>
                                        <div class="d-flex flex-wrap gap-4">
                                            <div>
                                                <div class="text-muted small">Waktu</div>
                                                <div>07:30-09:30</div>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Ruangan</div>
                                                <div>B3</div>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Kode dosen</div>
                                                <div>D3IF-47-01</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Current Card -->
                        <div class="schedule-card main-card">
                            <div class="schedule-content">
                                <div class="d-flex">
                                    <svg class="rocket-icon me-3" viewBox="0 0 24 24">
                                        <path d="M12 2C8 2 4 6 4 10C4 14 8 18 12 18C16 18 20 14 20 10C20 6 16 2 12 2M12 4C14.8 4 17 6.2 17 9C17 11.8 14.8 14 12 14C9.2 14 7 11.8 7 9C7 6.2 9.2 4 12 4M12 6C10.3 6 9 7.3 9 9C9 10.7 10.3 12 12 12C13.7 12 15 10.7 15 9C15 7.3 13.7 6 12 6M12 20L12.3 20.1C12.1 20 11.9 20 12 20M12 20C9.8 20 7.6 19.7 5.4 19.1C4.5 18.8 4 18 4 17.1V15H6V17C7.9 17.5 9.9 17.8 12 17.8C14.1 17.8 16.1 17.5 18 17V15H20V17.1C20 18 19.5 18.8 18.6 19.1C16.4 19.7 14.2 20 12 20Z"/>
                                    </svg>
                                    <div>
                                        <h5>SISTEM BASIS DATA 1</h5>
                                        <div class="d-flex flex-wrap gap-4">
                                            <div>
                                                <div class="text-muted small">Waktu</div>
                                                <div>07:30-09:30</div>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Ruangan</div>
                                                <div>B3</div>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Kode dosen</div>
                                                <div>D3IF-47-02</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Next Blurred Card -->
                        <div class="schedule-card blur-card ms-3">
                            <div class="schedule-content">
                                <div class="d-flex">
                                    <svg class="rocket-icon me-3" viewBox="0 0 24 24">
                                        <path d="M12 2C8 2 4 6 4 10C4 14 8 18 12 18C16 18 20 14 20 10C20 6 16 2 12 2M12 4C14.8 4 17 6.2 17 9C17 11.8 14.8 14 12 14C9.2 14 7 11.8 7 9C7 6.2 9.2 4 12 4M12 6C10.3 6 9 7.3 9 9C9 10.7 10.3 12 12 12C13.7 12 15 10.7 15 9C15 7.3 13.7 6 12 6M12 20L12.3 20.1C12.1 20 11.9 20 12 20M12 20C9.8 20 7.6 19.7 5.4 19.1C4.5 18.8 4 18 4 17.1V15H6V17C7.9 17.5 9.9 17.8 12 17.8C14.1 17.8 16.1 17.5 18 17V15H20V17.1C20 18 19.5 18.8 18.6 19.1C16.4 19.7 14.2 20 12 20Z"/>
                                    </svg>
                                    <div>
                                        <h5>BAHASA INGGRIS</h5>
                                        <div class="d-flex flex-wrap gap-4">
                                            <div>
                                                <div class="text-muted small">Waktu</div>
                                                <div>09:30-11:30</div>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Ruangan</div>
                                                <div>B3</div>
                                            </div>
                                            <div>
                                                <div class="text-muted small">Kode dosen</div>
                                                <div>D3IF-47-03</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="carousel-item">
                    <div class="d-flex justify-content-center">
                        <!-- Copy struktur yang sama seperti Item 1 dengan data berbeda -->
                        <!-- ... -->
                    </div>
                </div>

                <!-- Tambahkan item carousel lainnya sesuai kebutuhan -->
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var carousel = new bootstrap.Carousel(document.getElementById('scheduleCarousel'), {
                interval: false,
                wrap: true,
                keyboard: false
            });

            // Custom navigation
            document.querySelector('[data-bs-slide="prev"]').addEventListener('click', function(e) {
                e.preventDefault();
                carousel.prev();
            });

            document.querySelector('[data-bs-slide="next"]').addEventListener('click', function(e) {
                e.preventDefault();
                carousel.next();
            });
        });
    </script>
</body>
</html>