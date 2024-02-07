<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ./login.php");
} else if ($_SESSION['id_T'] == 1) {
    header('location: ../action/home.php');
}
?>

<html lang="en">

<head>
    <style>
    .btn_1,
    a.btn_1 {
        border: none;
        color: #fff;
        background: #978667;
        outline: 0;
        cursor: pointer;
        display: inline-flex;
        padding: 14px 25px;
        font-weight: 600;
        transition: 0.3s ease-in-out;
        border-radius: 25px;
        align-items: center;
        justify-content: center;
        line-height: 1;
    }

    .btn_1,
    a.btn_1:hover {
        color: #978667;
        text-decoration: none;
        background-color: #4b514d;
    }
    </style>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel XYZ - Selamat Datang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/home.css" />
    <style>
    /* Reset beberapa gaya default */
    body,
    h1,
    h2,
    h3,
    p,
    div {
        margin: 0;
        padding: 0;
    }

    /* Mengatur tampilan latar belakang dan font dasar */
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to bottom,
                #3498db,
                #2980b9);
        /* Warna latar belakang bergradasi */
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100vh;

    }

    .full {
        min-height: 92%;
    }

    /* Gaya judul halaman */
    h1 {
        text-align: center;
        padding: 20px;
        background-color: #333;
        color: #fff;
        margin: 0;
    }

    /* Gaya kontainer tabel */
    .containerT {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin: 20px;
        text-align: center;
        margin: 0 auto;
        /* Add this line to center the content horizontally */
        max-width: 800px;
        /* Adjust the max-width as needed */
    }

    /* Gaya judul tabel */
    .table-title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        background-color: #007bff;
        /* Warna latar belakang biru modern untuk judul */
        color: #fff;
        /* Warna teks dalam judul */
        padding: 10px;
        /* Tambahkan ruang padding untuk tampilan yang lebih baik */
    }

    /* Gaya tabel */
    .data-table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        /* Warna latar belakang tabel */
        border: 1px solid #007bff;
        /* Warna border tabel (misalnya, biru) */
        color: #333;
        /* Warna teks dalam tabel */
    }

    .data-table th,
    .data-table td {
        padding: 10px;
        text-align: left;
    }

    /* Gaya baris header tabel */
    .header-row {
        background-color: #007bff;
        /* Warna latar belakang header */
        color: #fff;
        /* Warna teks header */
    }

    /* Gaya baris tabel alternatif */
    .data-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Gaya data dalam tabel */
    .data-table tr.data-row:hover {
        background-color: #d5dbdb;
        /* Warna latar belakang saat dihover */
    }

    .hh {
        min-height: 7%;
    }

    /* Gaya tombol Tambahkan data baru */
    </style>
</head>

<body>
    <header class="bg-dark text-white">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Hotel XYZ</a>
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
    </header>
    <div class="full">
        <div class="containerT content w-full">
            <!-- Tambahkan class "content" di sini -->
            <div class="table-title">Data Table Kamar</div>
            <table class="data-table" border="1" cellpadding="5">
                <tr class="header-row">
                    <td>NO Kamar</td>
                    <td>Jenis Kamar</td>
                    <td>Keterangam</td>

                </tr>
                <?php
                        include "../action/koneksi.php";

                        // Mengambil semua data kamar dan bed
                        $data = mysqli_query($koneksi, "SELECT kamar.*, bed.* FROM kamar JOIN bed ON kamar.id_bed = bed.id_bed");

                        while ($data1 = mysqli_fetch_array($data)) {
                            $id_kamar = $data1["id_k"];

                            // Memeriksa apakah id_k dari kamar terhubung di tabel reservasi
                            $check_query = mysqli_query($koneksi, "SELECT reserfasi.* FROM reserfasi LEFT JOIN transaksi ON transaksi.id_RS = reserfasi.id_RS LEFT JOIN checkout ON checkout.id_transaksi = transaksi.id_transaksi LEFT JOIN history ON checkout.id_C = history.id_C WHERE id_k =  '$id_kamar' AND history.id_C IS NULL");

                            if (mysqli_num_rows($check_query) > 0) {
                                $id_reservasi = mysqli_fetch_assoc($check_query)["id_RS"];
                                $query22 = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id_RS = $id_reservasi");
                                if(mysqli_num_rows($query22) > 0){ 
                                    $id_transaksi = mysqli_fetch_assoc($query22)["id_transaksi"];
                                    $checkout_query1 = mysqli_query($koneksi, "SELECT * FROM checkout WHERE id_transaksi = $id_transaksi");

                                    if (mysqli_num_rows($checkout_query1) > 0) {
                                        // Jika ada checkout yang terhubung, periksa apakah ada di tabel history
                                        $id_checkout = mysqli_fetch_assoc($checkout_query1)["id_C"];
                                        $history_query = mysqli_query($koneksi, "SELECT * FROM history WHERE id_C = $id_checkout");
    
                                        if (mysqli_num_rows($history_query) > 0) {
                                            $keterangan = 'Tersedia';
                                        } else {
                                            $keterangan = 'Tidak Tersedia';
                                        }
                                    } else {
                                        $keterangan = 'Sudah di reservasi';
                                    }
                                }else{
                                    $keterangan = 'Sudah di reservasi';
                                };
                            } else {
                                $keterangan = 'Tersedia';
                            }
                            ?>
                <tr>
                    <td>
                        <?php echo $data1["no_kamar"] ?>
                    </td>
                    <td>
                        <?php echo $data1["jenis"] ?>
                    </td>
                    <td>
                        <?php if ($keterangan == 'Tersedia') { ?>
                        <a
                            href="./reservasi.php?id=<?php echo $data1['id_bed'] ?>& id_1=<?php echo $data1['id_k'] ?>">Tersedia</a>
                        <?php } elseif ($keterangan == 'Sudah di reservasi') { ?>
                        Sudah Direservasi
                        <?php } else {?> Tidak Tersedia <?php } ?>
                    </td>
                </tr>
                <?php
                        }
                ?>
            </table>
            <br>
            <a id="Book" href="./add-room.php" class="btn_1">Add Rooms</a>
        </div>
    </div>
</body>

</html>