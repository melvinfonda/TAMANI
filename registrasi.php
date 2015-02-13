<?php
	session_start();
	require_once('save_user.php');
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
                    <h2><br><br>Registrasi</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form method="post">
					<div class="form-group">
					<label for="nama">Nama</label>
					<input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama">
					</div>
					<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" name="Username" id="Username" placeholder="Username">
					</div>
					<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="Password" id="Password" placeholder="Password">
					</div>
					<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="Email" id="Email" placeholder="Email">
					</div>
					<div class="form-group">
					<label for="ktp">Nomor KTP</label>
					<input type="text" class="form-control" name="KTP" id="KTP" placeholder="Nomor KTP">
					</div>
					<div class="form-group">
					<label for="kontak">Nomor Kontak</label>
					<input type="text" class="form-control" name="Kontak" id="Kontak" placeholder="Nomor Kontak">
					</div>
					<?php
					if ($error === '');
					else
						echo
					'<div class="form-group" style="background-color: white; color: red">
					<p>'.$error.'</p>
					</div>';
					?>
					<button type="submit" name="submit" value="simpan" class="btn btn-default">Simpan</input>
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