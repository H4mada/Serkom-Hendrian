<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> <!-- Set karakter encoding ke UTF-8 -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Atur viewport untuk tampilan responsif -->
  <title>Formulir Pemesanan</title> <!-- Judul halaman -->
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> <!-- Link ke Bootstrap CSS -->
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex" style="background-color: rgba(0, 0, 0, 0.5);"> <!-- Navbar dengan warna latar belakang gelap -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent"> <!-- Kontainer untuk mengelompokkan item navbar -->
      <ul class="navbar-nav mr-auto"> <!-- Daftar navigasi di sebelah kiri -->
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}" style="color: #fff;">Rooms</a> <!-- Link ke halaman beranda -->
        </li>
      </ul>
      <ul class="navbar-nav ml-auto align-items-center"> <!-- Daftar navigasi di sebelah kanan -->
        <li class="nav-item">
          <a class="nav-link" href="{{ route('create') }}" style="color: #fff;">Pesan Kamar</a> <!-- Link ke halaman pemesanan kamar -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('reservations.index') }}" style="color: #fff;">Riwayat Pemesanan</a> <!-- Link ke halaman riwayat pemesanan -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('reservations.room-stats') }}" style="color: #fff;">Statistik Pemesanan</a> <!-- Link ke halaman statistik pemesanan -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}" style="color: #fff;">Tentang Kami</a> <!-- Link ke halaman tentang kami -->
        </li>
      </ul>
    </div>
  </nav>
  
  <style> 
    .form {
      margin-bottom: 8px; <!-- Tambahkan margin bawah pada form -->
    }
  </style>
  <div class="container mb-6 mt-3"> <!-- Kontainer Bootstrap dengan margin atas dan bawah -->
    <h1 class="text-center">Form Pemesanan</h1> <!-- Judul halaman -->

    @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }} <!-- Menampilkan pesan sukses jika ada -->
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li> <!-- Menampilkan semua pesan error jika ada -->
        @endforeach
      </ul>
    </div>
    @endif

    <form class="form" action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data"> <!-- Formulir untuk pemesanan kamar -->
      @csrf <!-- Token CSRF untuk keamanan -->
      <div class="mb-3">
        <label for="name" class="form-label">Nama Pemesan</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Masukan Nama Lengkap" aria-describedby="namaPemesanHelp"> <!-- Input untuk nama pemesan -->
      </div>

      <div class="mb-3">
        <label for="gender" class="form-label">Jenis Kelamin</label>
        <div class="form-check form-check">
          <input type="radio" class="form-check-input" id="Laki-laki" name="gender" value="Laki-laki" checked> <!-- Input radio untuk jenis kelamin laki-laki -->
          <label class="form-check-label" for="Laki-laki">Laki-laki</label>
        </div>
        <div class="form-check-inline form-check mb-3">
          <input type="radio" class="form-check-input" id="perempuan" name="gender" value="perempuan"> <!-- Input radio untuk jenis kelamin perempuan -->
          <label class="form-check-label" for="perempuan">Perempuan</label>
        </div>
      </div>

      <div class="mb-3">
        <label for="nik" class="form-label">Nomor Identitas</label>
        <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukan Nomer Identitas" aria-describedby="nomorIdentitasHelp"> <!-- Input untuk nomor identitas -->
      </div>

      <div class="mb-3">
        <label for="room_id" class="form-label">Tipe Kamar</label>
        <select class="form-select" id="room_id" name="room_id" onchange="updatePrice()"> <!-- Dropdown untuk memilih tipe kamar -->
          <option value="standart">STANDAR</option>
          <option value="deluxe">DELUXE</option>
          <option value="family">FAMILY</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Harga Kamar</label>
        <input type="hidden" id="price" name="price"> <!-- Input hidden untuk harga kamar -->
        <div id="price_display" class="form-control"></div> <!-- Div untuk menampilkan harga kamar -->
      </div>

      <div class="mb-3">
        <label for="date" class="form-label">Tanggal Pesan</label>
        <input type="date" class="form-control" id="date" name="date"> <!-- Input untuk tanggal pesan -->
      </div>

      <div class="mb-3">
        <label for="time" class="form-label">Durasi Menginap (Hari)</label>
        <input type="text" class="form-control" id="time" name="time"> <!-- Input untuk durasi menginap -->
      </div>

      <div class="form-check mb-3">
        <input type="checkbox" class="form-check-input" id="breakfast" name="breakfast" value="1"> <!-- Checkbox untuk memilih breakfast -->
        <label class="form-check-label" for="breakfast">Termasuk Breakfast</label>
      </div>

      <div class="mb-3">
        <label for="total" class="form-label">Total Bayar</label>
        <input type="hidden" id="total" name="total"> <!-- Input hidden untuk total bayar -->
        <div id="total_display" class="form-control"></div> <!-- Div untuk menampilkan total bayar -->
      </div>

      <button type="button" id="hitungTotal" class="btn btn-warning">Hitung Total Bayar</button> <!-- Tombol untuk menghitung total bayar -->
      <button type="submit" class="btn btn-warning">Simpan</button> <!-- Tombol untuk menyimpan form -->
      <button type="button" onclick="goBack()" class="btn btn-warning">Cancel</button> <!-- Tombol untuk membatalkan dan kembali ke halaman sebelumnya -->

    </form>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Fungsi untuk memformat angka menjadi format rupiah
      function formatRupiah(angka, prefix) {
          var number_string = angka.replace(/[^,\d]/g, '').toString(),
              split = number_string.split(','),
              sisa = split[0].length % 3,
              rupiah = split[0].substr(0, sisa),
              ribuan = split[0].substr(sisa).match(/\d{3}/gi);

          if (ribuan) {
              var separator = sisa ? '.' : '';
              rupiah += separator + ribuan.join('.');
          }

          rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
          return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
      }

      // Fungsi untuk memperbarui harga kamar berdasarkan tipe kamar yang dipilih
      function updatePrice() {
          var roomType = document.getElementById("room_id").value;
          var priceInput = document.getElementById("price");
          var priceDisplay = document.getElementById("price_display");

          console.log("Room type selected: " + roomType);

          // Set harga kamar berdasarkan tipe kamar yang dipilih
          if (roomType === "standart") {
              priceInput.value = "100000";
          } else if (roomType === "deluxe") {
              priceInput.value = "500000"; 
          } else if (roomType === "family") {
              priceInput.value = "1000000"; 
          }

          console.log("Price set to: " + priceInput.value);

          // Update tampilan harga format rupiah
          priceDisplay.textContent = formatRupiah(priceInput.value, 'Rp. ');
      }

      // Fungsi untuk menghitung total biaya
      function hitungTotal() {
          var price = parseFloat(document.getElementById('price').value);
          var time = parseFloat(document.getElementById('time').value);
          var breakfastChecked = document.getElementById('breakfast').checked;
          var totalRoomCost = price * time;
          var breakfastCost = 0;

          // Tambah biaya breakfast jika checkbox breakfast dipilih
          if (breakfastChecked) {
              breakfastCost = 80000 * time;
          }

          var totalCost = totalRoomCost + breakfastCost;

          // Diskon 10% jika menginap lebih dari 3 hari, tetapi tidak termasuk biaya breakfast
          if (time > 2) {
              totalRoomCost = totalRoomCost * 0.9;
          }

          totalCost = totalRoomCost + breakfastCost;

          // Tampilkan total di dalam input total bayar
          document.getElementById('total').value = totalCost;
          document.getElementById('total_display').textContent = formatRupiah(totalCost.toString(), 'Rp. ');
      }

      // Event listener untuk tombol "Hitung Total Bayar"
      document.getElementById('hitungTotal').addEventListener('click', hitungTotal);
      // Event listener untuk dropdown tipe kamar
      document.getElementById('room_id').addEventListener('change', updatePrice);
      // Set initial price on page load
      updatePrice();
    });

    // Fungsi untuk kembali ke halaman sebelumnya
    function goBack() {
      window.history.back();
    }
  </script>

</body>
</html>
