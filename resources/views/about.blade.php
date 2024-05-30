<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
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
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="{{route ('about')}}" style="color: #fff;">Tentang Kami</a>
            </li>
            </ul>
        </div>
        </nav>
        <div class="container">
    <h1 class="mt-5">Tentang Kami</h1>
    <p class="lead">Kami adalah tempat penginapan dengan berdedikasi pada kebutuhan cutomer.</p>
    <div class="row">
      <div class="col-md-6 mt-2 mb-2">
        <h3>Alamat Hotel</h3>
        <p>Jalan Merapi no 129, Kota Purwokerto</p>
        <p>Negara Indonesia</p>
      </div>
      <div class="col-md-6">
        <h3>Hubungi Kami</h3>
        <p><strong>Email:</strong> customer@roomsin.com</p>
        <p><strong>Telepon:</strong> +1234567890</p>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>