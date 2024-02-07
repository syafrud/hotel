<?php
include 'koneksi.php';

$bayar = $_POST['bayar'];
$kembalian = $_POST['kembalian'];
$idT = $_POST['idt'];
// echo "id_T= $id_transaksi";
mysqli_query($koneksi, "UPDATE transaksi SET bayar ='$bayar', kembalian='$kembalian'  WHERE transaksi.id_transaksi ='$idT' ");
mysqli_query($koneksi, "INSERT INTO checkout(id_transaksi) values ('$idT') ");
header("location:./home.php");
// echo"INSERT INTO checkout(id_transaksi) values ('$idT')";
// echo"UPDATE transaksi SET bayar ='$bayar'  WHERE transaksi.id_transaksi ='$idT' "
?>