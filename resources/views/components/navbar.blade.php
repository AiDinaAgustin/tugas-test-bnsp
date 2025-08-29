<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about') }}">Tentang Kami</a></li>
            <li><a href="{{ route('activities') }}">Kegiatan</a></li>
            <li><a href="{{ route('news') }}">Berita</a></li>
            <li><a href="{{ route('contact') }}">Kontak</a></li>
        </ul>
    </nav>
</body>
</html>