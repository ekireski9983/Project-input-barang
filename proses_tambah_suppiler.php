<?php
include("koneksi.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
 // ambil data dari formulir
 $Kode_Supplier = $_POST['Kode_Supplier'];
 $Nama_Supplier = $_POST['Nama_Supplier'];
 $Alamat = $_POST['Alamat'];
 $Telepon = $_POST['Telepon'];
 // buat query
 $sql = "INSERT INTO tbl_pelanggan (Kode_Supplier, Nama_Supplier, Alamat, Telepon) VALUE ('$Kode_Supplier', '$Nama_Supplier', '$Alamat', '$Telepon')";
 $query = mysqli_query($db, $sql);
 // apakah query simpan berhasil?
 if( $query ) {
 // kalau berhasil alihkan ke halaman index.php dengan status=sukses
 header('Location: login.php?status=sukses');
 } else {
 // kalau gagal alihkan ke halaman indek.php dengan status=gagal
 header('Location: login.php?status=gagal');
 }
} else {
 die("Akses dilarang...");
}
?>