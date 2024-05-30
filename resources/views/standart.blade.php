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
        <style>
        /* Atur ukuran gambar */
        .container{
          position: relative; 
          margin-top: 5px;
        }

        .card-img-top {
            height: 360px;
            width: 400px;
            vertical-align: middle;
          }
        .video {
          display: block;
          position: relative;
          top: -80px; /* Adjust this value according to your needs */
        }

       </style>
    <div class="container">
    <h1 class="text-center mt-5 mb-5">Kamar Standart</h1>
    <div class="row">
        <div class="col-md-6">
        <img src="{{ asset('img/Standart.jpeg') }}" class="card-img-top img-fluid" alt="Kamar Standar">
            <div class="card-body">
                <h5 class="card-title">Kamar Standart</h5>
                <p class="card-text">Kamar nyaman cocok untuk anda yang ingin beristirahat atau sebagai tempat singgah.</p>
                <h6 class="card-title">Harga : 100.000/hari</h6>
                <a href="{{route ('create')}}" class="btn btn-warning">Pesan Sekarang</a>
            </div>
        </div>
        <div class="col-md-6">
            <div class="video">
            <video width="400" height="400" controls>
            <source src="{{ asset('video/Standart.mp4') }}" type="video/mp4">
            </video>
            </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>