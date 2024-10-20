<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form tambah barang</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      box-sizing: border-box;
    }

    .form-group input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }
    .form-group input[type="reset"] {
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }
    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="proses_tambah_barang.php" method="POST">
      <h1>Form tambah barang</h1>
      <div class="form-group">
        <label for="kode_Barang">kode barang</label>
        <input type="text" id="kode_Barang" name="nama_siswa" required>
      </div>
      <div class="form-group">
        <label for="Nama_barang">nama barang</label>
        <input type="text" id="Nama_barang" name="Nama_barang" required>
      </div>
      <div class="form-group">
        <label for="Harga_jual">harga jual barang</label>
        <input type="text" id="Harga_jual" name="Harga_jual" required>
      </div>
      <div class="form-group">
        <label for="Harga_beli">harga beli barang</label>
        <input type="text" id="Harga_beli" name="Harga_beli" required>
      </div>
      <div class="form-group">
        <label for="stok">stok barang</label>
        <input type="text" id="stok" name="stok" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Simpan">
        <input type="reset" value="Reset">
      </div>
    </form>
  </div>
</body>
</html>
