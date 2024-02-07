<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ./login.php");
} else if ($_SESSION['id_T'] == 1) {
    header('location: ../action/home.php');
}
?>

<head>
    <link rel="stylesheet" href="../css/inputS.css">
</head>

<body>
    <div>
        <h3>checkin</h3>
        <?php
        include '../action/koneksi.php';
        $id_T = $_GET['idt'];
        $data_barang = mysqli_query($koneksi, "SELECT transaksi.*,user.username,reserfasi.hasil_H FROM transaksi LEFT JOIN reserfasi ON transaksi.id_RS=reserfasi.id_RS LEFT JOIN user ON reserfasi.id=user.id where id_transaksi='$id_T'");
        while ($tampil = mysqli_fetch_array($data_barang)) {
            ?>
        <form method="post" action="../action/transaksi.php">
            <table>
                <tr>
                    <td>ID Transaksi</td>
                    <td><input type="number" name="idt" value="<?php echo $tampil['id_transaksi']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama Users</td>
                    <td><input type="text" name="username" value="<?php echo $tampil['username']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>harga</td>
                    <td><input id="harga" type="number" name="harga" value="<?php echo $tampil['hasil_H']; ?>" readonly>
                    </td>
                </tr>
                <tr>
                    <td>membayar</td>
                    <td><input id="bayar" type="number" name="bayar" value="" oninput="hitungHasil()"></td>
                    <script>
                    // Fungsi untuk menghitung dan menampilkan hasil perkalian
                    function hitungHasil() {
                        // Mengambil nilai NIS dari input
                        var harga = document.getElementById("harga").value;
                        // Mengambil nilai jenis kasur dari input
                        var bayar = document.getElementById("bayar").value;

                        // Menghitung hasil perkalian dengan harga (yang telah diambil dari PHP)
                        var hasil = bayar - harga;

                        // Menampilkan hasil di elemen dengan id "harga"
                        // document.getElementById("harga").textContent = hasil;
                        // Mengatur nilai input tersembunyi "hasil_kali"
                        document.getElementById("kembalian").value = hasil;
                        console.log(hasil);
                    }
                    </script>
                </tr>
                <tr>
                    <td>kembalian</td>
                    <td><input id="kembalian" type="number" name="kembalian" value="" readonly></td>

                </tr>
                <tr>
                    <td><input type="submit" value="CHECKIN"></td>
                    <td><a class="view-siswa-button" href="table_reserfasi.php">Lihat Transaksi</a></td>
                </tr>
            </table>
        </form>
        <?php
        }
        ?>
    </div>
</body>