{{-- resources/views/errors/404.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container text-center" style="margin-top: 100px;">
        <h1 class="display-1" style="font-size: 100px;">404</h1>
        <h2>Halaman tidak ditemukan</h2>
        <p class="lead">Halaman yang Anda cari mungkin telah dihapus atau tidak tersedia.</p>
        <a href="{{ url('/category') }}" class="btn btn-primary btn-lg mt-4">Kembali ke Beranda</a>
    </div>
</body>
</html>
