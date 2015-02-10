<?php require_once('db_helper.php');
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
                    <h2><br><br>Entri Laporan</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
					<form method="post" action="add_laporan (<?php echo $_GET['no_pengaduan']?> )">
					<div class="form-group">
					<label for="nomorpengaduan">Nomor Pengaduan</label>
					<input type="text" class="form-control" id="nomorpengaduan" placeholder="Nomor Pengaduan">
					</div>
					<div class="form-group">
					<label for="Tanggal">Tanggal</label>
					<input type="date" class="form-control" id="tanggal">
					</div>
					<div class="form-group">
					<label for="isi">Isi</label>
					<textarea class="form-control" rows="3"></textarea>
					</div>
					 <div class="col-lg-10 text-center"></div>
					<button type="submit" class="btn btn-default">Submit</button>
					</form>

				</div>
            </div>
        </div>
    </section>

	
</body>
</html>