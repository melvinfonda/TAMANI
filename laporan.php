<?php
require_once('login.php'); // Includes Login Script
require_once('db_helper.php');
require_once('view.php');
?>
<!DOCTYPE html>
<html>
<head>

<meta charset = "utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/custom.css">
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
<title> TAMANI </title>
</head>

<body>

	<?php require_once('navbar.php'); ?>

	<div class="container">
    <div class="jumbotron">
      <h1>TAMANI</h1>
      <p>Website Pengaduan Taman</p>
    </div>
    <div class="row">
      <div class="col-xs-12 c">
        <div class="thumbnail">
          <div class="caption">
            <?php 

              $laporan=get_laporan($_GET['id_pengaduan']);
              echo format_laporan($laporan);
            ?>
             
          </div>
        </div>
      </div>
    </div>
  </div>


  
	
</body>
</html>