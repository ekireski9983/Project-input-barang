<?php
include "koneksi.php";
$pasid = $_GET["x"];
$sql = "DELETE FROM tbl_pelanggan WHERE Kode_Supplier='$Kode_Supplier'";
$conn->query($sql);
header("location:data_pelanggan.php");
?>