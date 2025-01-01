<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <x-navbar />

    <!-- Header Section -->
    @isset($header)
        <div class="container mt-4">
            {{ $header }}
        </div>
    @endisset

    <!-- Main Content -->
    <main class="flex-grow-1">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-footer-app />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
