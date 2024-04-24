<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $event->title }} - Event Detail</title>
    <!-- Tambahkan link CSS Bootstrap di sini -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* CSS Kustom */
        .gambar-event {
            max-width: 400px; /* Atur lebar maksimum gambar */
            margin-bottom: 20px; /* Atur margin bawah */
        }
    </style>
</head>
<body>
    @if(session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
        @endif
        
        <!-- Pesan sukses -->
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
    <div class="container mt-5">
        <h1>{{ $event->title }}</h1>
        <img src="{{ asset('images/' . $event->photo) }}" alt="{{ $event->title }}" class="img-fluid gambar-event mb-3">
        <p><strong>Date:</strong> {{ $event->date }}</p>
        <p><strong>Location:</strong> {{ $event->location }}</p>
        <p><strong>Description:</strong> {{ $event->description }}</p>
        
        <!-- Tombol untuk mendaftar ke acara -->
        <a href="{{ route('events.register', ['eventId' => $event->id]) }}" class="btn btn-success mb-3 mr-2" onclick="return confirm('Apakah Anda yakin ingin mendaftar pada event ini?')">Daftar</a>
        
        <!-- Tombol untuk menuju dashboard pengguna -->
        <a href="{{ route('user.dashboard') }}" class="btn btn-primary mb-3">Dashboard</a>        
        
        <!-- Tambahkan elemen HTML lainnya sesuai kebutuhan -->
    </div>

    <!-- Tambahkan script JS Bootstrap di sini jika diperlukan -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
