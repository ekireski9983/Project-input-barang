<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username)) {
  echo "<script>alert('Username belum diisi')</script>";
  echo "<meta http-equiv='refresh' content='1;url=login.php'>";
} else if (empty($password)) {
  echo "<script>alert('Password belum diisi')</script>";
  echo "<meta http-equiv='refresh' content='1;url=login.php'>";
} else {
  session_start();
  $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
  $query = mysqli_query($conn, $sql);
  $result = mysqli_num_rows($query);

  if ($result > 0) {
    $_SESSION['username'] = $username;
    header("location: menu.php");
  } else {
    echo "<script>alert('Username atau Password salah')</script>";
    echo "<meta http-equiv='refresh' content='1;url=login.php'>";
  }
}
?>
