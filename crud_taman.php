<?php
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
<title> TAMANI </title>
</head>

<body>


 <!-- Navigation -->
   <?php require_once('navbar.php'); ?>
   
      <!-- Registrasi Section -->
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><br><br>CRUD Taman</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">                               
				<table class="table">
						<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Location</th>
						<th colspan="2">Operation</th>
					</tr>
					<?php
						$gardens = get_all_garden();
						foreach ($gardens as $garden) {
							echo '<tr>
							<td>'.$garden['id'].'</td>
							<td>'.$garden['nama'].'</td>
							<td>'.$garden['lokasi'].'</td>
							<td><a class="btn btn-default" href="edit_garden.php" role="button">Edit</a></td>
							<td><a class="btn btn-default" href="del_garden.php?id='.$garden['id'].'" onClick=
                              "return konfirmasi()" role="button">Delete</a></td>
							</tr>';
							
						}
					?>					
				</table>				
				<div class="col-lg-offset-9 col-lg-3" style="margin-top: 50px;">
					<a class="btn btn-default" href="edit_garden.php" role="button">Add Garden</a>						
				</div>

            </div>
        </div>
    

    <!-- Footer -->
    <footer class="text-center" style="margin-top: 200px;">
        
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
	
<script type="text/javascript">
	
	  function konfirmasi(){
      tanya=confirm('Apakah anda yakin menghapus post ini?');
      if (tanya==true) return true;
      else return false;
  }
</script>
    
</body>
</html>
