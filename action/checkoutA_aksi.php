<?php
include 'koneksi.php';

$id_C = $_GET['idc'];


mysqli_query($koneksi, "INSERT INTO history(id_C) values ('$id_C')  ");
header("location:./home.php");
//echo ("INSERT INTO history(id_C) values ('$id_C') ");
?>