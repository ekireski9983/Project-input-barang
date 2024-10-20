<?php
include "koneksi.php";

$sql = "SELECT * FROM tbl_Transpelanggan";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>transfer penjualan</title>
    <link rel="stylesheet" type="text/css" href="penjualan.css">
</head>
<body>
  </div>
    <h2 align="center">Data transfer penjualan</h2>
    <table border="1" width="82%" cellpadding="5" align="center">
        <tr>
            <td colspan="6">
                <input type="button" value="Tambah Data" onclick="location='tambah_penjualan.php'"/>
                <input type="button" value="Menu" onclick="location='menu.php'"/>
            </td>
        </tr>
        <tr bgcolor="#00FFFF">
            <th width="106" scope="col">No transaksi</th>
            <th width="106" scope="col">tanggal transfer</th>
            <th width="110" scope="col">kode barang</th>
            <th width="110" scope="col">kode supplier</th>
            <th width="110" scope="col">Qty</th>
            <th width="99" scope="col">Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td align="center"><?php echo $row["No_transaksi"]; ?></td>
                <td align="center"><?php echo $row["tanggal"]; ?></td>
                <td align="center"><?php echo $row["kode_barang"]; ?></td>
                <td align="center"><?php echo $row["kode_supplier"]; ?></td>
                <td align="center"><?php echo $row["Qty"]; ?></td>
                <td align="center">
                    <div class="action-links">
                        <a href="updatepenjualan.php?No_transaksi=<?php echo $row["No_transaksi"]; ?>">Edit</a>
                        <a href="hapuspenjualan.php?No_transaksi=<?php echo $row["No_transaksi"]; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
