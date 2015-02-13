<?php
	session_start();
    $id = $_GET['var'];
    $con=mysqli_connect("localhost","root","","tamani");
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $query = mysqli_query($con,"SELECT nama, lokasi FROM taman WHERE id=$id");
    while ($hasil = mysqli_fetch_array($query)) {
        $nama = $hasil['nama'];
        $lokasi = $hasil['lokasi'];
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
<link rel="stylesheet" href="css/custom.css">
<!-- Latest compiled and minified JavaScript -->
<script src="js/bootstrap.min.js"></script>

<title> TAMANI </title>
</head>

<body>


 <!-- Navigation -->
   <?php require_once('navbar.php'); ?>
   
      <!-- Registrasi Section -->
    <section class="registrasi" id="registrasi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1><br><br>Edit Taman</h1>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
					<form method="post" action="save_old_garden.php?var=<?php echo $id; ?>">
					<div class="form-group">
					<label for="nama">Nama Taman</label>
					<input type="text" class="form-control" value="<?php echo $nama;?>" name="Nama" id="Nama" placeholder="Nama Taman">
					</div>
					<div class="form-group">
					<label for="username">Lokasi</label>
					<input type="text" class="form-control" value="<?php echo $lokasi;?>" name="Lokasi" id="Lokasi" placeholder="Lokasi">
					</div>
					
					<button type="submit" class="btn btn-default">Submit</button>
					</form>					

				</div>
            </div>
            
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; TAMANI 2015
                    </div>
                </div>
            </div>
        </div>
    </footer>
	
</body>
</html>

