<?php
include "config.php";
$pasid = $_GET["x"];
$sql = "DELETE FROM tabel_atk WHERE kode_Barang='$kode_Barang'";
$conn->query($sql);
header("location:data_pelanggan.php");
?>