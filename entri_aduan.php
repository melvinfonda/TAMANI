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
                    <h2><br><br>Entri Pengaduan</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
					<form>
					<div class="form-group">
					<label for="Judul">Judul</label>
					<input type="text" class="form-control" id="judul" placeholder="Judul">
					</div>
					<div class="form-group">
					<label for="Taman">Taman</label>
					<input type="text" class="form-control" id="taman" placeholder="Taman">
					</div>
					<div class="form-group">
					<label for="isi">Isi Aduan</label>
					<textarea class="form-control" rows="3"></textarea>
					</div>
					<div class="form-group">
					<div class="btn-group">
					<label for="sel1">Kategori (pilih salah satu) :</label>
					  <select class="form-control" id="sel1">
						<option>Keamanan</option>
						<option>Kebersihan</option>
						<option>Fasilitas</option>
					  </select>
					</div>					
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