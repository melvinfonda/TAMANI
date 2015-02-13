<?php
session_start();

$con=mysqli_connect("localhost","root","","tamani");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$Judul = mysqli_real_escape_string($con, $_POST['Judul']);
$id_taman = $_POST['id_taman'];
$Isi = mysqli_real_escape_string($con, $_POST['Isi']);
$id_instansi = $_POST['id_instansi'];

date_default_timezone_set('Asia/Jakarta');
$today = date('Ymd');

echo "INSERT INTO pengaduan (judul, tanggal, status, isi, username_pelapor, id_taman, id_instansi)
VALUES ('$Judul',$today,10,'$Isi','".$_SESSION['login_user']."', $id_taman, $id_instansi)";
if (!mysqli_query($con,"INSERT INTO pengaduan (judul, tanggal, status, isi, username_pelapor, id_taman, id_instansi)
VALUES ('$Judul',$today,10,'$Isi','".$_SESSION['login_user']."', $id_taman, $id_instansi)")) {
	printf("Error: %s\n", mysqli_error($con));
	mysqli_close($con);
} else {
	mysqli_close($con);
	header('Location: index.php');
}
?>