<?php
session_start();
require_once('db_helper.php');
require_once('view.php');


if (!isset($_GET['nomor']))
	header('Location: index.php');

$laporan = get_laporan($_GET['nomor']);

if (!$laporan)
	header('Location: index.php');
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
    <div class="row">
                <div class="col-lg-12 text-center">
                    <h1><br><br>LAPORAN</h1>
                    <hr class="star-primary">
                </div>
            </div>
    <div class="row">
      <div class="col-xs-12 c">
        <div class="thumbnail">
          <div class="caption">
            <?php 
              echo format_laporan($laporan);
            ?>
             
          </div>
        </div>
      </div>
    </div>
  </div>


  
	
</body>
</html>