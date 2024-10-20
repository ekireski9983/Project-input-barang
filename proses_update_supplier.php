
?><?php
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$jurusan_id = $_POST['jurusan_id'];
$nama_lengkap = $_POST['nama_lengkap'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

// update data ke database
mysqli_query($conn, "UPDATE jurusan SET jurusan_id='$jurusan_id', nama_lengkap='$nama_lengkap', kelas='$kelas', jurusan='$jurusan' WHERE jurusan_id='$jurusan_id'");
 
// mengalihkan halaman kembali ke nama_dan_jurusan.php
header("location: nama_dan_jurusan.php");
?>
