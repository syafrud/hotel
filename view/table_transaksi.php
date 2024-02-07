<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ./login.php");
} else if ($_SESSION['id_T'] == 1) {
    header('location: ../action/home.php');
}
?>

<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel XYZ - Selamat Datang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="home.css" />
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
        background: linear-gradient(to bottom, #3498db, #2980b9);
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
            <div class="table-title">Data Transaksi</div>
            <table class="data-table" border="1" cellpadding="5">
                <tr class="header-row">
                    <td>ID Transaksi</td>
                    <td>NIK</td>
                    <td>Nama Users</td>
                    <td>harga</td>
                    <td>membayar</td>
                    <td>kembalian</td>
                    <td>Cetak</td>
                </tr>
                <?php
            include "../action/koneksi.php";
            $data = mysqli_query($koneksi, "SELECT transaksi.*,user.*,reserfasi.hasil_H FROM transaksi LEFT JOIN reserfasi ON transaksi.id_RS=reserfasi.id_RS LEFT JOIN user ON reserfasi.id=user.id ");
            while ($data1 = mysqli_fetch_array($data)) {
                $id_transaksi = $data1["id_transaksi"];
                $check_query = mysqli_query($koneksi, "SELECT * FROM checkout WHERE id_transaksi = $id_transaksi");
                $keterangan = mysqli_num_rows($check_query) > 0 ? 'Sudah Bayar' : 'Belum Bayar';
                ?>
                <tr>
                    <td>
                        <?php echo $data1["id_transaksi"] ?>
                    </td>
                    <td>
                        <?php echo $data1["NIK"] ?>
                    </td>
                    <td>
                        <?php echo $data1["username"] ?>
                    </td>
                    <td>
                        <?php echo $data1["hasil_H"] ?>
                    </td>
                    <td>
                        <?php echo $data1["bayar"] ?>
                    </td>
                    <td>
                        <?php echo $data1["kembalian"] ?>
                    </td>

                    <td><a href="./resi.php?id=<?php echo $data1['id_transaksi']; ?>">Cetak</a></td>
                </tr>
                <?php
            }
            ?>
            </table>
        </div>
    </div>
</body>

</html>