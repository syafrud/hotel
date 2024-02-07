<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ./login.php");
} else if ($_SESSION['id_T'] == 1) {
    header('location: ../action/home.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Phoenix - Selamat Datang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/home.css" />
    <style>
    /* Gaya untuk dropdown */
    .dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
    }
    </style>
</head>

<body>
    <header class="bg-dark text-white">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Hotel Phoenix</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../action/home.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./kamar.php">Kamar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./table_checkout.php">Checkout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./table_transaksi.php">Transaksi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./table_reserfasi.php">Checkin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./reservasi.php">Reservasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../action/logout.php">logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="hero bg-primary text-center py-5">
            <div class="container">
                <h2 class="display-4">
                    Selamat Datang
                    <?php echo $_SESSION['username']; ?>, di Hotel Phoenix
                </h2>
                <p class="lead">Tempat Terbaik untuk Penginapan Anda</p>
                <a href="#kamar" class="btn btn-warning btn-lg">Lihat Kamar</a>
            </div>
        </div>
    </header>

    <section id="beranda" class="py-5">
        <div class="container">
            <h2 class="text-center">Tentang Kami</h2>
            <p class="text-center">
                Hotel Phoenix adalah tempat yang sempurna untuk menghabiskan waktu liburan
                Anda. Dengan pemandangan indah dan pelayanan yang ramah, kami akan
                membuat Anda merasa seperti di rumah.
            </p>
        </div>
    </section>

    <section id="kamar" class="py-5">
        <div class="container">
            <h2 class="text-center">Kamar Kami</h2>
            <p class="text-center">
                Explore berbagai jenis kamar yang kami tawarkan untuk kenyamanan Anda.
            </p>
        </div>
    </section>

    <section id="fasilitas" class="py-5">
        <div class="container">
            <h2 class="text-center">Fasilitas</h2>
            <p class="text-center">
                Nikmati berbagai fasilitas kami, termasuk kolam renang, restoran, dan
                layanan spa.
            </p>
        </div>
    </section>



    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2023 Hotel Phoenix. Hak Cipta Dilindungi.</p>
                </div>
                <div class="col-md-6 text-right">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">Kebijakan Privasi</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Syarat dan Ketentuan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>