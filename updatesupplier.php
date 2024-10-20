<!DOCTYPE html>
<html>
<head>
<title>Update Barang</title>
<link rel="stylesheet" type="text/css" href="updatebarang.css">
</head>
<body>
    <h2>Update Barang</h2>
    <?php
    include 'koneksi.php';
    $Kode_Supplier = $_GET['Kode_Supplier'];
    $sql = "SELECT * FROM tbl_pelanggan WHERE Kode_Supplier='$Kode_Supplier'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
    <form method="post" action="proses_update_supplier.php">
        <table>
            <tr>
                <td>Kode supplier</td>
                <td><input type="text" name="Kode_Supplier" value="<?= $row['Kode_Supplier'] ?>"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="Nama_Supplier" value="<?= $row['Nama_barang'] ?>"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="Alamat" value="<?= $row['Alamat'] ?>"></td>
            </tr>
            <tr>
                <td>telepon</td>
                <td><input type="text" name="Telepon" value="<?= $row['Telepon'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Simpan" />
                    <input type="reset" value="Ulang" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
