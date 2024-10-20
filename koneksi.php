<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "database_pemesanan";

// Membuat koneksi ke database menggunakan mysqli_connect
$conn = mysqli_connect($server, $user, $password, $nama_database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>