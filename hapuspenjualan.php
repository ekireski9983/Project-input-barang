<?php
include "config.php";
$pasid = $_GET["x"];
$sql = "DELETE FROM tbl_Transpelanggan WHERE No_transaksi='$No_transaksi'";
$conn->query($sql);
header("location:data_pelanggan.php");
?>