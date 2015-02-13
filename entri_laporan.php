<?php
	session_start();
	
	if (!isset($_SESSION['privilege']))
		$fine = false;
	else if ($_SESSION['privilege'] === 30)
		$fine = true;
	else
		$fine = false;
	
	if (!isset($_GET['no_pengaduan']))
		$fine = false;
	
	if (!$fine)
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
					<form method="post" action="save_laporan.php" onSubmit="return isValid();">
					<input type="hidden" name="nomor_pengaduan" value="<?php echo $_GET['no_pengaduan']; ?>">
					<div class="form-group">
					<label for="Tanggal">Tanggal</label>
					<input type="date" class="form-control" name="tanggal" id="tanggal">
					</div>
					<div class="form-group">
					<label for="isi">Isi</label>
					<textarea class="form-control" rows="3" name="isi" id="isi"></textarea>
					</div>
					 <div class="col-lg-10 text-center"></div>
					<button type="submit" class="btn btn-default">Submit</button>
					</form>

				</div>
            </div>
        </div>
    </section>

<script>
var patt = /^\d\d\d\d-\d\d-\d\d$/g;
var trim_p = /^\s+|\s+$/g;

function trim(s) {
   return s.replace(trim_p, '');
}

function isDateValid(s) {
	return patt.test(s);
}

function isValid() {
	var tgl = trim(document.getElementById("tanggal").value);
	var isi = trim(document.getElementById("isi").value);
	
	var valid = isDateValid(tgl);
	if (!valid)
		alert("Tanggal anda salah!, Masukkan dalam format yyyy-mm-dd");
		
	else {
		valid = isi != "";
		if (!valid) {
			alert("Isi anda tidak berisi!");
		}
	}
	
	return valid;
}
</script>
</body>
</html>