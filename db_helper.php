<?php

function get_all_pengaduan() {
	/* return all pengaduan, pengaduan have these attributes:
	 * no_pengaduan, judul, tanggal, isi, 
	 * kategori, status, username_pelapor, id_taman */
	$mysqli = new mysqli("localhost", "root", "", "tamani");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$result = $mysqli->query("SELECT pengaduan.*, taman.nama nama_taman, masyarakat.nama nama_pelapor, tindak_lanjut.nomor no_tindak_lanjut
FROM ((pengaduan JOIN masyarakat ON pengaduan.username_pelapor = masyarakat.username)
JOIN taman ON pengaduan.id_taman = taman.id) LEFT JOIN tindak_lanjut 
ON pengaduan.no_pengaduan = tindak_lanjut.no_pengaduan");
	$rows = array();
	for ($i = 0; $i < $result->num_rows; ++$i) {		
		$row = $result->fetch_assoc();		
		$rows[$i] = $row;
	}
	
	/* close connection */
	$mysqli->close();
	
	return $rows;
}

function get_all_garden(){
	/* return all garden, garden have these attributes:
		id, nama, lokasi */
	
	$mysqli = new mysqli("localhost", "root", "", "tamani");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$result = $mysqli->query("SELECT * FROM taman");
	$rows = array();
	for ($i = 0; $i < $result->num_rows; ++$i) {
		$row = $result->fetch_assoc();		
		$rows[$i] = $row;
	}
	
	/* close connection */
	$mysqli->close();
	
	return $rows;
}

function get_laporan($id_pengaduan ){
	/* return all laporan, where no_pengaduan*/
	
	$mysqli = new mysqli("localhost", "root", "", "tamani");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$result = $mysqli->query("SELECT * FROM tindak_lanjut WHERE no_pengaduan=".$id_pengaduan."");
	$row = mysqli_fetch_array($result);
	
	/* close connection */
	$mysqli->close();
	
	return $row;
}

function get_instansi($id)
{
	$mysqli = new mysqli("localhost", "root", "", "tamani");

	/* check connection */
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}

	$result = $mysqli->query("SELECT * FROM instansi WHERE id=".$id."");
	$row = mysqli_fetch_array($result);
	
	/* close connection */
	$mysqli->close();
	
	return $row;
}


?>
