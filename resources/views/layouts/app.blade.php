<!DOCTYPE html>
<html lang="id">
<head>
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS Kustom untuk Tombol Kembali -->
    <style>
        .btn-back {
            margin-left: -70px !important;  /* Mengatur margin kiri menjadi 0 */
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('services.index') }}">Services</a>
        </div>
    </nav>

    <div class="container py-4">
        <!-- Tombol Kembali (akan muncul jika ada halaman sebelumnya) -->
        @if (url()->previous())
            <a href="{{ url()->previous() }}" class="btn btn-primary mb-3 btn-back">
                <i class="fas fa-arrow-left"></i>
            </a>
        @endif

        <!-- Konten Halaman -->
        @yield('content')
    </div>

    <!-- Bootstrap JS (untuk interaktivitas seperti dropdown, modal, dll.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>