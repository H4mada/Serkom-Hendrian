<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Set karakter encoding ke UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Atur viewport untuk tampilan responsif -->
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> <!-- Link ke Bootstrap CSS -->
    <title>Home</title> <!-- Judul halaman -->
</head>
<style>
  .card-img-top {
    height: 350px; /* Atur tinggi gambar pada kartu */
    margin-bottom: 50px;
  }
  .row {
    margin-bottom: 50px;
  }
  .footer {
    background-color: grey;
  }
  .btn {
    margin-top: -20px;
    margin-bottom: 10px;
  }
</style>
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
    
    <div class="container">
        <h1 class="text-center mt-5 mb-5">Kamar Hotel</h1> <!-- Judul halaman -->
        
        <div class="row">
            <!-- Kamar Standar -->
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="{{ asset('img/Standart.jpeg') }}" class="card-img-top img-fluid" alt="Kamar Standar"> <!-- Gambar kamar standar -->
                    <div class="card-body">
                        <h5 class="card-title">Kamar Standar</h5> <!-- Judul kartu -->
                        <p class="card-text">Kamar nyaman cocok untuk anda yang ingin beristirahat atau sebagai tempat singgah.</p> <!-- Deskripsi kamar -->
                        <h6 class="card-title">100.000/hari</h6> <br> <!-- Harga kamar -->
                        <a href="{{route ('standart')}}" class="btn btn-warning">Lihat Kamar</a> <!-- Tombol untuk melihat kamar standar -->
                    </div>
                </div>
            </div>

            <!-- Kamar Deluxe -->
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="{{ asset('img/Deluxe1.jpeg') }}" class="card-img-top img-fluid" alt="Kamar Deluxe"> <!-- Gambar kamar deluxe -->
                    <div class="card-body">
                        <h5 class="card-title">Kamar Deluxe</h5> <!-- Judul kartu -->
                        <p class="card-text">Kamar nyaman dengan kasur yang lebih memanjakan badan cocok untuk anda yang ingin beristirahat dengan keluarga.</p> <!-- Deskripsi kamar -->
                        <h6 class="card-title">500.000/hari</h6> <br> <!-- Harga kamar -->
                        <a href="{{route ('deluxe')}}" class="btn btn-warning">Lihat Kamar</a> <!-- Tombol untuk melihat kamar deluxe -->
                    </div>
                </div>
            </div>

            <!-- Kamar Family -->
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="{{ asset('img/Executive.jpeg') }}" class="card-img-top img-fluid" alt="Kamar Family"> <!-- Gambar kamar family -->
                    <div class="card-body">
                        <h5 class="card-title">Kamar Family</h5> <!-- Judul kartu -->
                        <p class="card-text">Kamar mewah dan luas yang cocok untuk liburan anda dengan keluarga tercinta, dengan fasilitas setara dengan bintang 4.</p> <!-- Deskripsi kamar -->
                        <h6 class="card-title">1.000.000/hari</h6> <br> <!-- Harga kamar -->
                        <a href="{{route ('executive')}}" class="btn btn-warning">Lihat Kamar</a> <!-- Tombol untuk melihat kamar family -->
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <a href="{{route ('create')}}" class="btn btn-warning">Pesan Sekarang</a> <!-- Tombol untuk memesan kamar -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!-- Bootstrap JS -->
</body>
</html>
