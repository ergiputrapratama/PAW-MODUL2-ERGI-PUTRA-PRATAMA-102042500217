<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'db_showroom');

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_set_charset($conn, 'utf8mb4');
?>