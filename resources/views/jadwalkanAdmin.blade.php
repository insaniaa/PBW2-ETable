<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background-color: #ffefef;
        }

        .welcome-banner {
            background-color: #dc3545;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
        }

        .book-image {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            width: 150px;
            height: auto;
        }

        .add-section {
            background-color: #FFE4E4;
            border-radius: 15px;
            min-height: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .add-icon {
            width: 80px;
            height: 80px;
            color: #dc3545;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .add-icon:hover {
            transform: scale(1.1);
        }

        .add-text {
            color: #dc3545;
            margin-top: 15px;
            font-size: 1.2rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <x-layout>
        <main class="mt-5 max-w-lg-1680 mx-auto px-3 text-black" style="padding-top: 60px">
            <!-- Welcome Banner -->
            <section class="w-100 py-3 font-sans">
                <div class="bg-danger w-20 h-20 rounded-3 d-flex align-items-center p-3" style="height: 140px;">
                    <div class="d-lg-flex w-100 justify-content-center text-white fw-bold gap-lg-5">
                        <div class="d-lg-flex flex-column justify-content-center me-lg-5">
                            <h1 class="fw-bold display-6">Welcome back, Minnn!</h1>
                            <h2 class="fw-normal h4">Buat Jadwal baru nich.</h2>
                        </div>
                        <div>
                            <img class="img-fluid" src="{{ asset('img/buku-beranda.png') }}" alt="gambar buku" style="transform: scale(0.5);">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Add Schedule Section -->
            <div class="add-section p-4">
                <div class="text-center">
                    <svg class="add-icon bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                    </svg>
                    <h3 class="add-text mt-3">Ada jadwal/kelas apa nih minnnn</h3>
                    <p class="text-danger">tambahkan</p>
                </div>
            </div>
        </main>
    </x-layout>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>