<?php
include 'koneksi.php';

$id_RS = $_POST['id_RS'];
$bayar = $_POST['bayar'];
$kembalian = $_POST['kembalian'];
// mysqli_query($koneksi, "INSERT INTO checkout(id_RS) values ('$id_RS') ");
mysqli_query($koneksi, "INSERT INTO transaksi(id_RS,bayar,kembalian) values ('$id_RS','$bayar','$kembalian')");



$data1=mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id_RS='$id_RS'");
while ($data = mysqli_fetch_array($data1)) {
    $idT = $data['id_transaksi'];
        // echo "id_T= $id_transaksi";
    // mysqli_query($koneksi, "UPDATE transaksi SET bayar ='$bayar', kembalian='$kembalian'  WHERE transaksi.id_transaksi ='$idT' ");
    mysqli_query($koneksi, "INSERT INTO checkout(id_transaksi) values ('$idT') ");
}
// echo"INSERT INTO transaksi(id_RS) values ('$id_RS')";
// echo"INSERT INTO checkout(id_transaksi) values ('$idT')";
// echo"UPDATE transaksi SET bayar ='$bayar'  WHERE transaksi.id_transaksi ='$idT' "

header("location:../view/resi.php?id=$idT");
?>