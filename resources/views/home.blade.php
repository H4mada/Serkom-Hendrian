<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Home</title>
</head>
<style>
  .card-img-top {
    height: 350px; /* Adjust the height as needed */
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
        <h1 class="text-center mt-5 mb-5">Kamar Hotel</h1>

  <div class="row">
  <div class="col-md-4">
    <div class="card mb-3">
      <img src="{{ asset('img/Standart.jpeg') }}" class="card-img-top img-fluid" alt="Kamar Standar">
      <div class="card-body">
        <h5 class="card-title">Kamar Standar</h5>
        <p class="card-text">Kamar nyaman cocok untuk anda yang ingin beristirahat atau sebagai tempat singgah.</p>
        <h6 class="card-title">100.000/hari</h6> <br>
        <a href="{{route ('standart')}}" class="btn btn-warning">Lihat Kamar</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card mb-3">
      <img src="{{ asset('img/Deluxe1.jpeg') }}" class="card-img-top img-fluid" alt="Kamar Deluxe">
      <div class="card-body">
        <h5 class="card-title">Kamar Deluxe</h5>
        <p class="card-text">Kamar nyaman dengan kasur yang lebih memanjakan badan cocok untuk anda yang ingin beristirahat dengan keluarga</p>
        <h6 class="card-title">500.000/hari</h6> <br>
        <a href="{{route ('deluxe')}}" class="btn btn-warning">Lihat Kamar</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card mb-3">
      <img src="{{ asset('img/Executive.jpeg') }}" class="card-img-top img-fluid" alt="Kamar Suite">
      <div class="card-body">
        <h5 class="card-title">Kamar Executive</h5>
        <p class="card-text">Kamar mewah dan luas yang cocok untuk liburan anda dengan keluarga tercinta, dengan fasilitas setara dengan bintang 4.</p>
        <h6 class="card-title">1.000.000/hari</h6> <br>
        <a href="{{route ('executive')}}" class="btn btn-warning">Lihat Kamar</a>
      </div>
    </div>
  </div>
</div>
      <div class="d-flex justify-content-center">
          <a href="{{route ('create')}}" class="btn btn-warning">Pesan Sekarang</a>
      </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>