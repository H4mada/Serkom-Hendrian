<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Set karakter encoding ke UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Atur viewport untuk tampilan responsif -->
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> <!-- Link ke Bootstrap CSS -->
    <title>Document</title> <!-- Judul halaman -->
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex" style="background-color: rgba(0, 0, 0, 0.5);"> <!-- Navbar dengan warna latar belakang gelap -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent"> <!-- Kontainer untuk mengelompokkan item navbar -->
            <ul class="navbar-nav mr-auto"> <!-- Daftar navigasi di sebelah kiri -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route ('home')}}" style="color: #fff;">Rooms</a> <!-- Link ke halaman beranda -->
                </li>
            </ul>
            <ul class="navbar-nav ml-auto align-items-center"> <!-- Daftar navigasi di sebelah kanan -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('create')}}" style="color: #fff;">Pesan Kamar</a> <!-- Link ke halaman pemesanan kamar -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('reservations.index')}}" style="color: #fff;">Riwayat Pemesanan</a> <!-- Link ke halaman riwayat pemesanan -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('reservations.room-stats')}}" style="color: #fff;">Statistik Pemesanan</a> <!-- Link ke halaman statistik pemesanan -->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('about')}}" style="color: #fff;">Tentang Kami</a> <!-- Link ke halaman tentang kami -->
                </li>
            </ul>
        </div>
    </nav>
    
    <style>
        /* Atur ukuran gambar */
        .container {
            margin-top: 15px; /* Margin atas untuk kontainer utama */
        }
        .card-img-top {
            height: 400px; /* Tinggi gambar pada kartu */
            width: 400px; /* Lebar gambar pada kartu */
        }
        .video {
            display: block;
            position: relative;
            top: 0px; /* Posisi atas video */
            border: 1px solid #ccc; /* Gaya border */
            border-radius: 5px; /* Sudut border membulat */
            box-shadow: 0 0 5px rgba(0,0,0,0.1); /* Efek bayangan */
        }
    </style>

    <div class="container">
        <h1 class="text-center mt-5 mb-5">Kamar Family</h1> <!-- Judul halaman -->
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/Executive.jpeg') }}" class="card-img-top img-fluid" alt="Kamar Family"> <!-- Gambar kamar family -->
                <div class="card-body">
                    <h5 class="card-title">Kamar Family</h5> <!-- Judul kartu -->
                    <p class="card-text">Kamar mewah dan luas yang cocok untuk liburan anda dengan keluarga tercinta.</p> <!-- Deskripsi kamar -->
                    <h6 class="card-title">Harga: 1.000.000/hari</h6> <!-- Harga kamar -->
                    <a href="{{route ('create')}}" class="btn btn-warning">Pesan Sekarang</a> <!-- Tombol untuk memesan kamar -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="video">
                    <video width="538" height="400" controls> <!-- Video kamar family -->
                        <source src="{{ asset('video/Executive.mp4') }}" type="video/mp4"> <!-- Sumber video -->
                    </video>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
