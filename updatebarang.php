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
    $kode_Barang = $_GET['kode_Barang'];
    $sql = "SELECT * FROM tabel_atk WHERE kode_Barang='$kode_Barang'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>
    <form method="post" action="proses_update_barang.php">
        <table>
            <tr>
                <td>Kode Barang</td>
                <td><input type="text" name="kode_Barang" value="<?= $row['kode_Barang'] ?>"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="Nama_barang" value="<?= $row['Nama_barang'] ?>"></td>
            </tr>
            <tr>
                <td>Harga Jual</td>
                <td><input type="text" name="Harga_jual" value="<?= $row['Harga_jual'] ?>"></td>
            </tr>
            <tr>
                <td>Harga Beli</td>
                <td><input type="text" name="Harga_beli" value="<?= $row['Harga_beli'] ?>"></td>
            </tr>
            <tr>
                <td>Stok Barang</td>
                <td><input type="text" name="stok" value="<?= $row['stok'] ?>"></td>
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
