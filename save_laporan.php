<?php
	session_start();

	$mysqli = new mysqli("localhost", "root", "", "tamani");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$tanggal=$_POST['tanggal'];
	$itahun = substr($tanggal, 0, 4);
	$ibulan = substr($tanggal, 5, 2);
	$iangka = substr($tanggal, 8, 2);
	$itanggal= $itahun.$ibulan.$iangka;
	
	$isi=$_POST['isi'];
	$no_pengaduan=$_POST['nomor_pengaduan'];
	$id_instansi=$_SESSION['id_instansi'];

	if (!mysqli_query($mysqli,"INSERT INTO tindak_lanjut (tanggal, isi, no_pengaduan, id_instansi) 
		VALUES ($itanggal,'$isi',$no_pengaduan,$id_instansi)")) {
		echo "Query failed: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	
	if (!mysqli_query($mysqli,"UPDATE pengaduan SET status=50 WHERE no_pengaduan=$no_pengaduan")) {
		echo "Query failed: (" . $mysqli->errno . ") " . $mysqli->error;
	}
	
	/* close connection */
	$mysqli->close();

	header('Location: index.php');
?>
