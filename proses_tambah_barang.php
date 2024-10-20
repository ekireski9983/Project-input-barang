<?php
include("koneksi.php");
// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])){
    // ambil data dari formulir
    $kode_Barang = $_POST['kode_Barang'];
    $Nama_barang = $_POST['Nama_barang'];
    $Harga_jual = $_POST['Harga_jual'];
    $Harga_beli = $_POST['Harga_beli'];
    $stok = $_POST['stok'];
    // buat query
    $sql = "INSERT INTO tabel_atk (kode_Barang, Nama_barang, Harga_jual, Harga_beli, stok) VALUES ('$kode_Barang', '$Nama_barang', '$Harga_jual', '$Harga_beli', '$stok')";
    $query = mysqli_query($koneksi, $sql);
    // apakah query simpan berhasil?
    if($query){
        // kalau berhasil alihkan ke halaman login.php dengan status=sukses
        header('Location: login.php?status=sukses');
        exit;
    } else {
        // kalau gagal alihkan ke halaman login.php dengan status=gagal
        header('Location: login.php?status=gagal');
        exit;
    }
} else {
    die("Akses dilarang...");
}
?>
