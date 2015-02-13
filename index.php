<?php
session_start();
require_once('db_helper.php');
require_once('view.php');
$level = 0;
if (isset($_SESSION['privilege']))
	$level = $_SESSION['privilege'];
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
		<br>
		<img src="img/tree.png"  style="float:left; width:150px;">
		<img src="img/Bandung.png"  style="float:right; width:150px;">
			<center><h1>TAMANI</h1>
			<p>Website Pengaduan Taman Kota Bandung</p></center>
		</div>
		<div class="row">
			<?php
			$pengaduans = get_all_pengaduan();
			if (empty($pengaduans)) {
				echo '<div class="col-sm-12 col-md-12">
				<div class="thumbnail">
				<div class="caption">
				<p>Belum ada pengaduan</p>
				</div></div></div>';

			} else {
				if (isset($_SESSION['id_instansi'])) {
					$to_display = array();
					foreach ($pengaduans as $pengaduan)
						if ($pengaduan['id_instansi'] == $_SESSION['id_instansi'])
							$to_display[] = $pengaduan;
					
				} else
					$to_display = $pengaduans;

				foreach ($to_display as $pengaduan)
					echo format_pengaduan($pengaduan, $level);
			}
			?>
		</div>
	</div>
</body>
</html>