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
   <?php 
   session_start();
   require_once('navbar.php'); ?>
      <!-- Registrasi Section -->
    <section class="registrasi" id="registrasi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1><br><br>Tambah Taman</h1>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
					<form method="post" action="save_new_garden.php">
    					<div class="form-group">
        					<label for="nama">Nama Taman</label>
        					<input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama Taman">
    					</div>
    					<div class="form-group">
        					<label for="username">Lokasi</label>
        					<input type="text" class="form-control" name="Lokasi" id="Lokasi" placeholder="Lokasi">
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
