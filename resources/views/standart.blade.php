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
        /* Atur ukuran gambar dan tata letak */
        .container {
            position: relative; 
            margin-top: 5px;
        }
        .card-img-top {
            height: 360px; /* Tinggi gambar */
            width: 400px; /* Lebar gambar */
            vertical-align: middle; /* Rata tengah secara vertikal */
        }
        .video {
            display: block;
            position: relative;
            top: -80px; /* Penyesuaian posisi vertikal video */
        }
    </style>

    <div class="container">
        <h1 class="text-center mt-5 mb-5">Kamar Standart</h1> <!-- Judul halaman -->
        
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('img/Standart.jpeg') }}" class="card-img-top img-fluid" alt="Kamar Standar"> <!-- Gambar kamar standar -->
                <div class="card-body">
                    <h5 class="card-title">Kamar Standart</h5> <!-- Judul kartu -->
                    <p class="card-text">Kamar nyaman cocok untuk anda yang ingin beristirahat atau sebagai tempat singgah.</p> <!-- Deskripsi kamar -->
                    <h6 class="card-title">Harga : 100.000/hari</h6> <!-- Harga kamar -->
                    <a href="{{route ('create')}}" class="btn btn-warning">Pesan Sekarang</a> <!-- Tombol untuk memesan kamar -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="video">
                    <video width="400" height="400" controls> <!-- Video untuk kamar standar -->
                        <source src="{{ asset('video/Standart.mp4') }}" type="video/mp4"> <!-- Sumber video -->
                    </video>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!-- Bootstrap JS -->
</body>
</html>
