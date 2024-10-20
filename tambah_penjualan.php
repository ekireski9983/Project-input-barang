<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form tambah penjualan</title>
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
      <h1>Form tambah penjualan</h1>
      <div class="form-group">
        <label for="No_transaksi">Nomor transaksi</label>
        <input type="text" id="No_transaksi" name="No_transaksi" required>
      </div>
      <div class="form-group">
        <label for="Tanggal">tanggal transfer</label>
        <input type="date" id="Tanggal" name="Tanggal" required>
      </div>
      <div class="form-group">
        <label for="kode_barang">kode barang</label>
        <input type="text" id="kode_barang" name="kode_barang" required>
      </div>
      <div class="form-group">
        <label for="kode_supplier">kode supplier</label>
        <input type="text" id="kode_supplier" name="kode_supplier" required>
      </div>
      <div class="form-group">
        <label for="Qty">Qty</label>
        <input type="text" id="Qty" name="Qty" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Simpan">
        <input type="reset" value="Reset">
      </div>
    </form>
  </div>
</body>
</html>
