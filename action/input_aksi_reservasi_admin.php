<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("location: ../view/login.php");
    exit;
}
header('Content-Type: application/json');
$jsonResponse;
$responseData;



// Memeriksa apakah data yang diperlukan telah diterima dari formulir
if (isset($_POST['nik']) && isset($_POST['kasur']) && isset($_POST['kamar']) && isset($_POST['lama']) && isset($_POST['tgl']) && isset($_POST['tanggalFormat'])) {
    include "../action/koneksi.php";

    // Mengambil data dari formulir
    $nik = $_POST['nik'];
    $lama = $_POST['lama'];
    $tgl = $_POST['tgl'];
    $id_bed = $_POST['kasur'];
    $kamar = $_POST['kamar'];
    $tglCheckout = $_POST['tanggalFormat'];

    // Mengambil harga dari tabel bed
    $query = "SELECT harga FROM bed WHERE id_bed = $id_bed";
    $result = mysqli_query($koneksi, $query);

    // Jika harga ditemukan
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $harga = $row['harga'];
        $hasil_H = $lama * $harga;

        // Memeriksa apakah NIK pengguna sudah ada dalam tabel user
        $result1 = mysqli_query($koneksi, "SELECT id FROM user WHERE NIK = $nik");

        // Jika NIK sudah ada, gunakan ID pengguna yang ada
        if (mysqli_num_rows($result1) > 0) {
            $row1 = mysqli_fetch_assoc($result1);
            $id = $row1['id'];
            mysqli_query ($koneksi, "INSERT INTO reserfasi (id, inap, checkout, id_bed, hasil_H, id_k, checkin) VALUES ('$id', '$lama', '$tglCheckout', '$id_bed', '$hasil_H', '$kamar', '$tgl')");
            
            http_response_code(200);
            // Mengembalikan respons sukses
            $responseData = array(
                "success" => true,
                "message" => "Reservation successful"
            );
        } else {
            $password_hashed = password_hash($nik, PASSWORD_DEFAULT);
            // Jika NIK tidak ada, buat pengguna baru dan ambil ID-nya
            mysqli_query($koneksi, "INSERT INTO user (NIK,username,password,id_T,email) VALUES ('$nik','$nik','$password_hashed',1,'$nik@gmail.com')");
            $insert = mysqli_query($koneksi, "SELECT id FROM user WHERE NIK = $nik");
            if($insert) {
                $IS = mysqli_fetch_assoc($insert);
                $id1 = $IS['id'];
                $query_reservasi = mysqli_query ($koneksi, "INSERT INTO reserfasi (id, inap, checkout, id_bed, hasil_H, id_k, checkin) VALUES ('$id1', '$lama', '$tglCheckout', '$id_bed', '$hasil_H', '$kamar', '$tgl')");
                if($query_reservasi) {
                    http_response_code(200);
                    // Mengembalikan respons sukses
                    $responseData = array(
                        "success" => true,
                        "message" => "Reservation successful"
                    );
                } else {
                    http_response_code(500);
                    // Mengembalikan respons gagal
                    $responseData = array(
                        "success" => false,
                        "message" => "Failed to insert reservation data"
                    );
                }
            } else {
                http_response_code(500);
                // Mengembalikan respons gagal
                $responseData = array(
                    "success" => false,
                    "message" => "Failed to fetch user ID"
                );
            }
        }
    }
}

else {
    http_response_code(401);

    // Create a response data array
    $responseData = array(
        "success" => false,
        "message" => "bad"
    );

}
echo $jsonResponse = json_encode($responseData);
?>