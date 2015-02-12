<?php

  session_start();
	require_once('db_helper.php');
	require_once('entri_helper.php');
	$tamans = get_all_garden();
	$instansis = get_all_instansi();
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
                    <h2><br><br>Entri Pengaduan</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
				<?php
					if (count($tamans) === 0 || count($instansis) === 0)
						say_sorry();
					else
						display_form($tamans, $instansis);
				?>
            </div>
        </div>
    </section>

<script>

function trim(s) {
   return s.replace (/^\s+|\s+$/g, '');
}

function cekkosong()
{

  var judul=trim(document.getElementById("judul").value);
  var isi=trim(document.getElementById("isi").value);
  console.log(judul);
  console.log(isi);

  return judul !="" && isi !="";


}

</script>
	
</body>
</html>
