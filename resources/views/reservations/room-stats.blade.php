<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Pembelian Kamar</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

    <div class="container mt-3">
        <h2 class="text-center mt-5">Statistik Pembelian Kamar</h2>
        <h5 class= "text-center">total pemesanan</h5>
        <canvas id="roomStatsChart"></canvas>
    </div>
    
<!-- pemanggilan tabel grafik dan pemanggilan variabel untuk tiap tipe kamar pada grafik -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('roomStatsChart').getContext('2d');
            var roomStats = @json($roomStats);
            var labels = Object.keys(roomStats).map(key => key.charAt(0).toUpperCase() + key.slice(1));
            var data = Object.values(roomStats).map(stat => stat.totalBookings);
            var colors = ['red', 'blue', 'yellow'];

            var roomStatsChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label : 'total pemesanan',
                        data: data,
                        backgroundColor: colors
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
