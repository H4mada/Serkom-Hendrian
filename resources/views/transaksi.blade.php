<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }

        .booking-item {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
        }

        .booking-item label {
            font-weight: bold;
        }
    </style>
<body>
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
        <style>
        .booking-item label {
          display: inline-block;
          width: 150px; /* Adjust this width as needed */
          padding-right: 10px; /* Add padding for the colon */
          }

        .booking-item label span {
            display: inline-block;
            width: 10px; /* Width of the colon */
            text-align: center;
          }
        </style>
<!-- menampilkan dan memanggil card transaksi/nota  -->
        <div class="container">  
    <h1 class="text-center">Hasil Pemesanan</h1>
    @if(isset($booking))
        <div class="booking-item">
        <div class="row">
        <div class="col-md-10">
            <label>Nama Pemesan     </label> : {{ $booking->name }}<br>
            <label>Jenis Kelamin    </label> : {{ $booking->gender }}<br>
            <label>Nomor Identitas  </label> : {{ $booking->nik }}<br>
            <label>Tipe Kamar       </label> : {{ $booking->room_id }}<br>
            <label>Harga Kamar      </label> : Rp {{ number_format((float)str_replace(',', '', $booking->price), 0) }}<br>
            <label>Tanggal Pesan    </label> : {{ $booking->date }}<br>
            <label>Durasi Menginap  </label> : {{ $booking->time  }}<br>
            <label>Breakfast        </label> : {{ $booking->breakfast }}<br>
            <label>Diskon</label> : 
            <!-- rumus memilih apakah terdapat diskon atau tidak -->
            @php
                $total = $booking->total;
                if ($booking->time > 2) {
                    echo "Diskon 10% (tidak termasuk breakfast)";
                }
                else {
                    echo "Tidak Ada Diskon<br>";
                }
                
            @endphp
            <br>

            <label>Total Bayar      </label> : Rp {{ number_format((float)str_replace(',', '', $booking->total), 0) }}<br>

        </div>
        </div>
        </div>
        @else
        <p>Tidak ada booking yang tersedia.</p>
        @endif

</body>
</html>