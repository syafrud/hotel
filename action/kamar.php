<?php
include "./koneksi.php";

$Room = $_POST['room'];
$Jenis = $_POST['jenis'];
// echo($Room);
// echo("      ");
// echo($Jenis);
mysqli_query($koneksi, "INSERT INTO kamar(no_kamar, id_bed) VALUES('$Room','$Jenis')");
header("location:../view/kamar.php");
?>