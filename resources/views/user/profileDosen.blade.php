<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            width: 1440px;
            height: 1348px;
            margin: 0 auto;
            background-color: #f8f9fa;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 111px;
            padding: 0 30px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar h1 {
            font-family: Inter, sans-serif;
            font-size: 24px;
            font-weight: 700;
            color: #585858;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .profile img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-text {
            font-family: Inter, sans-serif;
            font-size: 16px;
            font-weight: 700;
            color: #585858;
        }

        .red-rectangle {
            width: 100%;
            height: 295px;
            background: #BC1010;
        }

        .card {
            width: 800px;
            margin: -150px auto 0;
            padding: 30px;
            border-radius: 20px;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-family: Inter, sans-serif;
            font-size: 24px;
            font-weight: 700;
            color: #000;
            margin-bottom: 20px;
        }

        .form-label {
            font-family: Inter, sans-serif;
            font-size: 16px;
            font-weight: 600;
            color: #585858;
        }

        .form-control {
            border: 2px solid #585858;
            border-radius: 10px;
            font-family: Inter, sans-serif;
            font-size: 16px;
            font-weight: 600;
            color: #585858;
        }

        .btn-edit {
            padding: 10px 30px;
            border-radius: 10px;
            border: none;
            background: #BC1010;
            color: #fff;
            font-weight: 600;
            font-size: 16px;
        }

        .btn-edit:hover {
            background: #a80e0e;
        }

        .footer {
            width: 100%;
            background: #fff;
            padding: 20px 30px;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .footer-column {
            flex: 1;
        }

        .footer-column h5 {
            font-family: Inter, sans-serif;
            font-size: 16px;
            font-weight: 700;
            color: #585858;
            margin-bottom: 10px;
        }

        .footer-column p {
            font-family: Inter, sans-serif;
            font-size: 14px;
            color: #585858;
            line-height: 1.5;
        }

        .profile-img-wrapper {
            position: relative;
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
        }

        .profile-img-wrapper img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #BC1010;
        }

        .upload-icon {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 30px;
            height: 30px;
            background: #BC1010;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            cursor: pointer;
        }

        .upload-icon input {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <h1>Profil Dosen</h1>
        <div class="profile">
            <img src="path-to-image" alt="Profile Picture">
            <span class="profile-text">Evansius Rafael</span>
        </div>
    </div>

    <!-- Red Rectangle -->
    <div class="red-rectangle"></div>

    <!-- Card -->
    <div class="card">
        <h2 class="card-title">Edit Profil</h2>
        <form action="update_profile.php" method="POST" enctype="multipart/form-data">
            <div class="profile-img-wrapper">
                <img src="path-to-image" alt="Profile Picture">
                <div class="upload-icon">
                    <input type="file" name="profile_image" accept="image/*">
                    <span>+</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="" required>
            </div>
            <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" value="" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="" required>
            </div>
            <button type="submit" class="btn btn-edit">Edit</button>
        </form>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="footer-column">
            <h5>Tel-U Timetable</h5>
            <p>Tel-U Timetable adalah sebuah aplikasi yang bertujuan memberikan kemudahan bagi mahasiswa Tel-U dalam mengelola jadwal perkuliahan yang ada. Memanajemen tugas, mengatur, dan menyelesaikan tugas dengan lebih efisien dan terstruktur.</p>
        </div>
        <div class="footer-column">
            <h5>Menu</h5>
            <p>Tentang Kami</p>
            <p>Jadwal</p>
            <p>Kalender</p>
            <p>Beranda</p>
        </div>
        <div class="footer-column">
            <h5>Kontak</h5>
            <p>Email: ttable@gmail.com</p>
            <p>Telepon: 0856-4142-1197 (Salma)</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>