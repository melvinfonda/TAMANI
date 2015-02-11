<?php
	require_once('db_helper.php');
	session_start();
	
	if (!isset($_SESSION['privilege']))
		$fine = false;
	else if ($_SESSION['privilege'] === 20)
		$fine = true;
	else
		$fine = false;
	
	
	if (!isset($_POST['no_pengaduan']) || !isset($_POST['status']))
		$fine = false;
	
	if ($fine) {
		$error = ubah_status_pengaduan($_POST['no_pengaduan'], $_POST['status']);
		if ($error === '') {
			header('Location: index.php');
			
		} else {
			echo $error;
		}
		
	} else {
		header('Location: index.php');
	}
?>