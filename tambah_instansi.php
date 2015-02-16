<?php
	session_start();
	require_once('db_helper.php');
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

<title>Tambah Instansi</title>
</head>

<body>


 <!-- Navigation -->
   <?php require_once('navbar.php'); ?>
   
      <!-- Registrasi Section -->
    <section class="registrasi" id="registrasi">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><br><br>Tambah Intansi</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
					<form method="post" action="insert_instansi.php" onSubmit="return isValid();">
					<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama Instansi">
					</div>
					<div class="form-group">
					<label for="username">Lokasi</label>
					<input type="text" class="form-control" name="Lokasi" id="Lokasi" placeholder="Lokasi">
					</div>
					<div class="form-group">
					<label for="username">Kategori</label>
					<input type="text" class="form-control" name="Kategori" id="Kategori" placeholder="Kategori">
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

<script>
var trim_p = /^\s+|\s+$/g;

function trim(s) {
   return s.replace(trim_p, '');
}

function isValid() {
	var nama = trim(document.getElementById("Nama").value);
	var lokasi = trim(document.getElementById("Lokasi").value);
	var kategori = trim(document.getElementById("Kategori").value)
	
	var valid = nama != "" && lokasi != "" && kategori != "";
	if (!valid)
		alert("Masukan anda salah.");
	
	return valid;
}
</script>
</body>
</html>

