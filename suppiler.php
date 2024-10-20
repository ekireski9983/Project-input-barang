<?php
include "koneksi.php";

$sql = "SELECT * FROM tbl_pelanggan";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>suppiler</title>
    <link rel="stylesheet" type="text/css" href="suppiler.css">
</head>
<body>
  </div>
    <h2 align="center">Data suppiler</h2>
    <table border="1" width="82%" cellpadding="5" align="center">
        <tr>
            <td colspan="6">
                <input type="button" value="Tambah Data" onclick="location='tambah_supplier.php'"/>
                <input type="button" value="Menu" onclick="location='menu.php'"/>
            </td>
        </tr>
        <tr bgcolor="#00FFFF">
            <th width="106" scope="col">kode suppiler</th>
            <th width="106" scope="col">nama suppiler</th>
            <th width="110" scope="col">alamat</th>
            <th width="110" scope="col">telepon</th>
            <th width="99" scope="col">Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td align="center"><?php echo $row["Kode_Supplier"]; ?></td>
                <td align="center"><?php echo $row["Nama_Supplier"]; ?></td>
                <td align="center"><?php echo $row["Alamat"]; ?></td>
                <td align="center"><?php echo $row["Telepon"]; ?></td>
                <td align="center">
                    <div class="action-links">
                        <a href="updatesupplier.php?Kode_Supplier=<?php echo $row["Kode_Supplier"]; ?>">Edit</a>
                        <a href="hapussupplier.php?Kode_Supplier=<?php echo $row["Kode_Supplier"]; ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
