<?php
$nama = $_POST['Nama'];
$lokasi = $_POST['Lokasi'];
$kategori = $_POST['Kategori'];
$username = $_POST['Username'];
$password = $_POST['Password'];

if (!isset($nama) || !isset($lokasi) || !isset($kategori))
	header("Location: index.php");

$con = mysqli_connect("localhost","root","","tamani");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$nama = mysqli_real_escape_string($con, $nama);
$lokasi = mysqli_real_escape_string($con, $lokasi);
$kategori = mysqli_real_escape_string($con, $kategori);
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

mysqli_query($con, "INSERT INTO instansi (nama, lokasi, kategori) VALUES ('$nama', '$lokasi', '$kategori')");
mysqli_query($con, "INSERT INTO user (username, password) VALUES ('$username', '$username')");

mysqli_close($con);

header('Location: daftar_instansi.php');
?>