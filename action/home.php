<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ../index.php");
    exit;
} else if ($_SESSION['id_T'] == 1) {
    header('location: ../index.php');
} else if ($_SESSION['id_T'] == 2) {
    header('location: ../view/admin.php');
}
?>