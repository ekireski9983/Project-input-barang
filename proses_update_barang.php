<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$kode_Barang = $_POST['kode_Barang'];
$Nama_barang = $_POST['Nama_barang'];
$Harga_jual = $_POST['Harga_jual'];
$Harga_beli = $_POST['Harga_beli'];
$stok = $_POST['stok'];

// update data ke database
$sql = "UPDATE tabel_atk SET Nama_barang='$Nama_barang', Harga_jual='$Harga_jual', Harga_beli='$Harga_beli', stok='$stok' WHERE kode_Barang='$kode_Barang'";
mysqli_query($conn, $sql);
 
// mengalihkan halaman kembali ke index.php
header("location: calon_siswa.php"); 
?>
