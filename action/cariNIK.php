<?php
// Koneksi ke database
include "../action/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nik'])) {
    // Ambil NIK dari input
    $nik = $_POST['nik'];

    // Query untuk mencari email berdasarkan NIK
    $query = "SELECT email FROM user WHERE NIK = '$nik'";
    $result = mysqli_query($koneksi, $query);

    // Jika data ditemukan
    if (mysqli_num_rows($result) > 0) {
        // Ambil email dari hasil query
        $row = mysqli_fetch_assoc($result);
        $email = $row['email'];
        // Tampilkan email
        echo $email;
    } else {
        // Jika NIK tidak ditemukan, tampilkan pesan error atau lakukan tindakan yang sesuai
        echo "NIK tidak ditemukan";
    }
}
?>