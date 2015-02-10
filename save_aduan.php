<html>
<body>
<?php
$con=mysqli_connect("localhost","root","","tamani");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$Judul = mysqli_real_escape_string($con, $_POST['Judul']);
$Taman = mysqli_real_escape_string($con, $_POST['Taman']);
$Isi = mysqli_real_escape_string($con, $_POST['Isi']);
$Kategori = mysqli_real_escape_string($con, $_POST['Kategori']);


mysqli_query($con,"INSERT INTO pengaduan (no_pengaduan, judul, tanggal, kategori, status, isi, username_pelapor, id_taman)
VALUES ('','$Judul','20150601','$Kategori','a','$Isi','a', '1')");

mysqli_close($con);


header('Location: entri_aduan.php');
?>
</body>
</html>