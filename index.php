<?php
require_once('login.php'); // Includes Login Script
require_once('db_helper.php');
require_once('view.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/custom.css">
	<script src="js/bootstrap.min.js"></script>
	<title> TAMANI </title>
</head>

<body>
	<?php require_once('navbar.php'); ?>
	
	<div class="container">
		<div class="jumbotron">
		<img src="img/tree.png"  style="float:left; width:150px;">
		<img src="img/Bandung.png"  style="float:right; width:150px;">
			<center><h1>TAMANI</h1>
			<p>Website Pengaduan Taman Kota Bandung</p></center>
		</div>
		<div class="row">
			<?php
			$pengaduans = get_all_pengaduan();
			foreach ($pengaduans as $pengaduan) {
				echo format_pengaduan($pengaduan);
			}
			?>
		</div>
	</div>
</body>
</html>