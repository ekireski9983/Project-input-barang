<?php
include("koneksi.php");
// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])){
    // ambil data dari formulir
    $No_transaksi = $_POST['No_transaksi'];
    $Tanggal = $_POST['Tanggal'];
    $kode_barang = $_POST['kode_barang'];
    $kode_supplier = $_POST['kode_supplier'];
    $Qty = $_POST['Qty'];
    // buat query
    $sql = "INSERT INTO tbl_Transpelanggan (No_transaksi, Tanggal, Harga_jual, kode_barang, kode_supplier, Qty) 
    VALUES ('$No_transaksi', '$Tanggal', '$kode_barang', '$kode_supplier', '$Qty')";
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
