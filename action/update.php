<?php
session_start();

header('Content-Type: application/json');
$jsonResponse;
$responseData;

if (isset($_POST['id_RS']) && isset($_POST['kasur']) && isset($_POST['kamar']) && isset($_POST['lama']) && isset($_POST['tgl'])&& isset($_POST['tanggalFormat'])) {
    // Set the HTTP response status to 200 OK
http_response_code(200);

// Send the JSON response

    include "./koneksi.php";

    $id = $_POST['id_RS'];
    $lama = $_POST['lama'];
    $tgl = $_POST['tgl'];
    $id_bed = $_POST['kasur'];
    $kamar = $_POST['kamar'];
    $tglCheckout = $_POST['tanggalFormat'];
    // Fetch the 'harga' value from the 'bed' table
    $query = "SELECT harga FROM bed WHERE id_bed = $id_bed";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $harga = $row['harga'];
        $hasil_H = $lama * $harga;

        // Use the selected values in an INSERT query
        mysqli_query ($koneksi,"UPDATE reserfasi SET   inap='$lama',  checkout='$tglCheckout',  id_bed='$id_bed',  hasil_H='$hasil_H',  id_k='$kamar', checkin='$tgl' WHERE id_RS='$id'");
        // echo "UPDATE reserfasi SET  inap='$lama', checkout='$tglCheckout', id_bed='$id_bed', hasil_H='$hasil_H', id_k='$kamar',checkin='$tgl', WHERE id='$id'";
    }
    // Create a response data array
$responseData = array(
    "success" => true,
    "message" => "Data Succesful"
);
}

else {
    $responseData = array(
        "success" => false,
        "message" => "data failed"
    );
    http_response_code(401);
}
echo $jsonResponse = json_encode($responseData);
?>