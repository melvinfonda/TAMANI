<?php
$id = $_POST['id'];
$nama = $_POST['Nama'];
$lokasi = $_POST['Lokasi'];
$kategori = $_POST['Kategori'];

if (!isset($id) || !isset($nama) || !isset($lokasi) || !isset($kategori))
	header("Location: index.php");

$con = mysqli_connect("localhost","root","","tamani");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$nama = mysqli_real_escape_string($con, $nama);
$lokasi = mysqli_real_escape_string($con, $lokasi);
$kategori = mysqli_real_escape_string($con, $kategori);

mysqli_query($con, "UPDATE instansi SET nama='$nama', lokasi='$lokasi',
	kategori='$kategori' WHERE id=$id");

mysqli_close($con);

header('Location: daftar_instansi.php');
?>