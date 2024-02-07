<?php
include "./koneksi.php";

if (isset($_GET['id_RS'])) {
    $id_RS = $_GET['id_RS'];
    mysqli_query($koneksi, "DELETE FROM reserfasi WHERE id_RS='$id_RS'");
    header("location: ../view/reservasi-list.php");
}else{
    echo('lsukfgh;osdb');
}
?>