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
    a,
    a.animated_link,
    a.btn_1,
    a:focus,
    a:hover {
        text-decoration: none;
    }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.umd.min.js"></script>
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
    form {
        padding: 20px;
        /* Add padding to the form */
        background-color: #fff;
        /* Background color for the form */
        border-radius: 5px;
        /* Rounded corners */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        /* Box shadow for a subtle depth effect */
        margin: 20px;
        text-align: center;
        margin: 0 auto;
        /* Center the form horizontally */
        max-width: 800px;
        /* Adjust the max-width as needed */
    }

    /* Style for the table */
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #f5f5f5;
        border: 1px solid #e0e0e0;
    }

    /* Style for table rows */
    tr {
        background-color: #fff;
    }

    /* Style for table data cells */
    td {
        padding: 10px;
        text-align: left;
    }

    /* Style for input elements */
    input[type="text"],
    input[type="number"],
    input[type="date"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="number"]:focus,
    input[type="date"]:focus {
        border-color: #007bff;
    }

    /* Style for select elements */
    select {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 10px;
        transition: border-color 0.3s;
    }

    select:focus {
        border-color: #007bff;
    }

    /* Style for the submit button */
    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-weight: bold;
        text-transform: uppercase;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
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
            <h3>Reservasi</h3>

            <form method="post">
                <table cellpadding="5">
                    <tr>
                        <td>Users NIK</td>
                        <td>
                            <!-- Buatkan inputan numbur untuk mencari NIK dari database dari tabel user dan jika ada tampilakan emailnya -->
                            <input type="number" name="nik" id="nik" oninput="cariEmail()">
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <!-- Tampilkan email disini -->
                            <span id="hasilEmail"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>Lama Inap</td>
                        <td>
                            <input type="number" name="lama" id="lama" oninput="hitungHasil()" />
                        </td>
                    </tr>
                    <tr>
                        <td>tanggal Checkout</td>
                        <td><input type="date" name="tgl" id="tgl" /></td>
                    </tr>
                    <tr>
                        <td>jenis kasur</td>
                        <td>
                            <select name="kasur" id="kasur" onchange="hitungHasil()">
                                <option value="" disabled selected>Pilih Kelas</option>
                                <?php
                        // Koneksi ke database
                        include "../action/koneksi.php";

                        // Query untuk mengambil data id_bed, jenis, dan harga dari bed
                        $query = "SELECT id_bed, jenis, harga FROM bed";
                        $result = mysqli_query($koneksi, $query);
                        $jenisSelec = "";
                        if (!empty($_GET['id'])) {
                            $jenisSelec = $_GET['id'];
                        }
                        // Loop untuk membuat opsi dropdown
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id_bed = $row['id_bed'];
                            $jenis = $row['jenis'];
                            $harga = $row['harga'];
                            $selected = " ";
                            if ($id_bed == $jenisSelec)
                                $selected = "selected";

                            // Masukkan nilai harga ke dalam atribut data-harga
                            echo "<option value='$id_bed' data-harga='$harga' " . $selected . ">$jenis</option>";
                        }

                  ?>
                            </select>

                            <script>
                            // Fungsi untuk menghitung dan menampilkan hasil perkalian
                            function hitungHasil() {
                                // Mengambil nilai NIS dari input
                                var lama = document.getElementById("lama").value;
                                // Mengambil nilai jenis kasur dari input
                                var kasur = document.getElementById("kasur");
                                var harga =
                                    kasur.options[kasur.selectedIndex].getAttribute(
                                        "data-harga"
                                    );

                                // Menghitung hasil perkalian dengan harga (yang telah diambil dari PHP)
                                var hasil = lama * harga;

                                // Menampilkan hasil di elemen dengan id "harga"
                                document.getElementById("harga").textContent = hasil;
                                // Mengatur nilai input tersembunyi "hasil_kali"
                                document.getElementById("hasil_kali").value = hasil;
                                console.log(kasur);
                            }
                            </script>
                        </td>
                    </tr>
                    <tr>
                        <td>No kamar</td>
                        <td>
                            <select name="kamar" id="kamarDropdown">
                                <option value="" disabled selected>Pilih Kamar</option>
                                <?php
                        if (!empty($_GET['id'])) {

                            $id_bed = $_GET['id'];

                            $query = "SELECT DISTINCT bed.id_bed,bed.harga, kamar.id_k, kamar.no_kamar
                            FROM kamar
                            left JOIN bed ON bed.id_bed = kamar.id_bed
                            LEFT JOIN reserfasi ON kamar.id_k = reserfasi.id_k
                            LEFT JOIN transaksi ON transaksi.id_RS = reserfasi.id_RS
                            LEFT JOIN checkout ON checkout.id_transaksi=transaksi.id_transaksi
                            LEFT JOIN history ON checkout.id_C = history.id_C
                            WHERE reserfasi.id_RS IS NULL AND bed.id_bed='$id_bed' OR 
                            history.id_C IS NOT NULL AND bed.id_bed='$id_bed'";
                            $result = mysqli_query($koneksi, $query);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id_k = $row['id_k'];
                                $nama = $row['no_kamar'];
                                $selected = " ";

                                if ($_GET['id_1'] == $row['id_k']) {
                                    $selected = "selected";
                                }

                                // Masukkan nilai harga ke dalam atribut data-harga
                                echo "<option value='$id_k'  " . $selected . ">$nama</option>";
                            }
                        } 
                  ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><span id="harga"></span></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="RESERVASI" id="submit-booking" /></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script>
    // Mengambil elemen dropdown NIS
    var kasur = document.getElementById('kasur');

    // Mengambil elemen dropdown Guru
    var kamarDropdown = document.getElementById('kamarDropdown');

    // Menambahkan event listener untuk perubahan pada dropdown NIS
    kasur.addEventListener('change', function() {
        var selectedNIS = this.value;

        // Hapus semua opsi di dropdown Guru
        kamarDropdown.innerHTML = ''; // Lebih efisien untuk menghapus semua opsi

        // Tambahkan opsi default "Pilih Kamar" yang tidak dapat dipilih
        var defaultOption = document.createElement('option');
        defaultOption.selected = 'Pilih Kamar';
        defaultOption.text = 'Pilih Kamar';
        defaultOption.value = '';
        defaultOption.disabled = true; // Tambahkan atribut disabled
        kamarDropdown.add(defaultOption);

        <?php
          $data = "var guruData = [";
          $query = "SELECT DISTINCT bed.id_bed, bed.harga, kamar.id_k, kamar.no_kamar
        FROM kamar
        LEFT JOIN bed ON bed.id_bed = kamar.id_bed
        LEFT JOIN reserfasi ON kamar.id_k = reserfasi.id_k
        LEFT JOIN transaksi ON transaksi.id_RS = reserfasi.id_RS
        LEFT JOIN checkout ON checkout.id_transaksi = transaksi.id_transaksi
        LEFT JOIN history ON checkout.id_C = history.id_C
        WHERE reserfasi.id_k IS NULL AND history.id_C IS NULL OR history.id_C IS NOT null
        ;";
          $result = mysqli_query($koneksi, $query);
          $first = true;
          $jenisSelec = "";
          if (!empty($_GET['id_1'])) {
              $jenisSelec = $_GET['id_1'];
          }
          while ($row = mysqli_fetch_assoc($result)) {
              if (!$first) {
                  $data .= ",";
              }
              $data .= "{ id_bed: '" . $row['id_bed'] . "', id_k: '" . $row['id_k'] . "', no_kamar: '" . $row['no_kamar'] . "', selected:'" . $jenisSelec . "' }";
              $first = false;
          }
          $data .= "];";
          echo $data;
          ?>

        // Menambahkan opsi guru ke dropdown berdasarkan NIS yang dipilih
        guruData.forEach(function(data) {
            if (data.id_bed === selectedNIS) {
                var guruOption = document.createElement('option');
                guruOption.text = data.no_kamar;
                guruOption.value = data.id_k;
                kamarDropdown.add(guruOption);
                console.log(guruOption);
            }
        });

    });
    </script>
    <script>
    $("#submit-booking").click(function(e) {
        e.preventDefault();
        var nik = $("#nik").val();
        var kasur = $("#kasur").val();
        var kamar = $("#kamarDropdown").val();
        var lama = $("#lama").val();
        var tgl = $("#tgl").val();
        var tglCheckout = new Date(tgl);
        tglCheckout.setDate(tglCheckout.getDate() + parseInt(lama)); // Pastikan 'lama' diubah menjadi integer

        var tahun = tglCheckout.getFullYear();
        var bulan = (tglCheckout.getMonth() + 1).toString().padStart(2,
            '0'); // Tambah 1 karena indeks bulan dimulai dari 0, pad dengan '0' jika perlu
        var tanggal = tglCheckout.getDate().toString().padStart(2, '0');

        var tanggalFormat = tahun + '-' + bulan + '-' + tanggal;

        console.log(tanggalFormat);
        console.log(kasur);
        console.log(kamar);
        console.log(lama);
        console.log(tgl);
        console.log(nik);
        $.ajax({
            type: "POST",
            url: "../action/input_aksi_reservasi_admin.php", // Adjust the path
            data: {
                nik: nik,
                kasur: kasur,
                kamar: kamar,
                lama: lama,
                tgl: tgl,
                tanggalFormat: tanggalFormat
            },
            success: function(response) {
                alert(response.message);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("AJAX Error: " + errorThrown);
            },
        });
    });
    </script>
    <script>
    function cariEmail() {
        var nik = document.getElementById("nik").value;
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.getElementById("hasilEmail").innerHTML = xhr.responseText;
            }
        };
        xhr.open("POST", "../action/cariNIK.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("nik=" + nik);
    }
    </script>
</body>

</html>