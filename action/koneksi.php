<?php
// $koneksi = mysqli_connect("localhost", "root", "", "hotel");

// Konfigurasi database untuk Railway
$host = getenv('RAILWAY_MYSQL_HOST') ?: 'localhost';
$username = getenv('RAILWAY_MYSQL_USERNAME') ?: 'root';
$password = getenv('RAILWAY_MYSQL_PASSWORD') ?: '';
$database = getenv('RAILWAY_MYSQL_DATABASE') ?: 'hotel';
$port = getenv('RAILWAY_MYSQL_PORT') ?: 3306;

// Membuat koneksi
$koneksi = mysqli_connect($host, $username, $password, $database, $port);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
