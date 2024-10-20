<?php
include "koneksi.php";

$sql = "SELECT * FROM tabel_atk";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>data barang</title>
<link rel="stylesheet" type="text/css" href="tabel_barang.css">
</head>
<body>
    <h2 align="center">Data barang</h2>
    <table border="1" width="82%" cellpadding="5" align="center">
        <tr>
            <td colspan="8">
                <input type="button" value="Tambah Data" onclick="location='tambahbarang.php'"/>
                <input type="button" value="Menu" onclick="location='menu.php'"/>
            </td>
        </tr>
        <tr bgcolor="#00FFFF">
            <th width="30" scope="col">No barang</th>
            <th width="91" scope="col">Nama barang</th>
            <th width="106" scope="col">harga jual</th>
            <th width="106" scope="col">harga beli</th>
            <th width="106" scope="col">stok barang</th>
            <th width="99" scope="col">Action</th>
        </tr>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td align="center"><?php echo $row["kode_Barang"]; ?></td>
                <td align="center"><?php echo $row["Nama_barang"]; ?></td>
                <td align="center"><?php echo $row["Harga_jual"]; ?></td>
                <td align="center"><?php echo $row["Harga_beli"]; ?></td>
                <td align="center"><?php echo $row["stok"]; ?></td>
                <td align="center">
                    <div class="action-links">
                        <a href="updatebarang.php?kode_Barang=<?php echo $row["kode_Barang"]; ?>">Edit</a>
                        <a href="hapusbarang.php?kode_Barang=<?php echo $row["kode_Barang"]; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
