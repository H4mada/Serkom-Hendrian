<!-- resources/views/reservations/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pemesan</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex" style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route ('home')}}" style="color: #fff;">Rooms</a>
                </li>
                </ul>
                <ul class="navbar-nav ml-auto align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('create')}}" style="color: #fff;">Pesan Kamar</a>
                </li><li class="nav-item">
                    <a class="nav-link" href="{{route ('reservations.index')}}" style="color: #fff;"> riwayat Pemesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('reservations.room-stats')}}" style="color: #fff;">Statistik Pemesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('about')}}" style="color: #fff;">Tentang Kami</a>
                </li>
                </ul>
            </div>
        </nav>
<!-- untuk menampilkan Card transaksi/nota -->
    <div class="container mt-3">
        <h1 class="text-center">Daftar Pemesan</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nama Pemesan</th>
                    <th>Jenis Kelamin</th>
                    <th>Nomor Identitas</th>
                    <th>Tipe Kamar</th>
                    <th>Harga Kamar</th>
                    <th>Tanggal Pesan</th>
                    <th>Durasi Menginap</th>
                    <th>Breakfast</th>
                    <th>Total Bayar</th>
                </tr>
            </thead>
            <tbody>
                <!-- pemanggilan variabel -->
                @foreach ($reservations as $reservation)
                    <tr>
                        <td>{{ $reservation->name }}</td>
                        <td>{{ $reservation->gender == 'Laki-laki' ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td>{{ $reservation->nik }}</td>
                        <td>{{ ucfirst($reservation->room_id) }}</td>
                        <td>Rp {{ number_format($reservation->price, 0, ',', '.') }}</td>
                        <td>{{ $reservation->date }}</td>
                        <td style="text-align: center;">{{ $reservation->time }}</td>
                        <td>{{ $reservation->breakfast}}</td>
                        <td>Rp {{ number_format($reservation->total, 0, ',', '.') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
