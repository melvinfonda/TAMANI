<?php
require_once('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
	header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>

<meta charset = "utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>
<title> TAMANI </title>
</head>

<body>

	<?php require_once('navbar.php'); ?>

	<div class="container">
	<p>jing</p>
	<?php echo $error; ?>
	</div>

	 <div class="container">
  <div class="jumbotron">
    <h1>TAMANI</h1>
    <p>Website Pengaduan Taman</p>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <h3>Pengaduan 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Pengaduan 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Pengaduan 3</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
	
</body>
</html>