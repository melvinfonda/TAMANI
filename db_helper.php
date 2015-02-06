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

	$result = $mysqli->query("SELECT * FROM pengaduan");
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
		//echo $row['nama'] ;
		$rows[$i] = $row;
	}
	
	/* close connection */
	$mysqli->close();
	
	return $rows;
}

?>
