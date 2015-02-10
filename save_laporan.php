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

	echo $itanggal." ".$isi." ".$no_pengaduan." ".$id_instansi;

	mysqli_query($mysqli,"INSERT INTO tindak_lanjut (nomor, tanggal, isi, no_pengaduan, id_instansi) 
		VALUES ('', '$itanggal','$isi','$no_pengaduan','$id_instansi')");

	
	
	/* close connection */
	$mysqli->close();

	header('Location: index.php');
?>
