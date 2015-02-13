<?php
	session_start();
	require_once('db_helper.php');
	$gardens = get_all_garden();
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
                <div class="col-lg-9 text-center">
                    <h2><br><br>CRUD Taman</h2>                    
                </div>
                <div class="col-lg-offset-1 col-lg-2">
					<br><br><br><br><br>
					<div class="btn btn-default" href="add_garden.php" role="button">
						<span class="glyphicon-plus">  Add Garden</span>
					</div>						
				</div>
				<div class="col-lg-12 text-center">
					<hr class="star-primary">
				</div>
            </div>
            <div class="row">                               
				<?php
					if (empty($gardens))
						echo '<p>Belum ada taman.</p>';
					
					else {
						echo '<table class="table" id="custom_table" width="100%">
						<tr>
						<th>Name</th>
						<th>Location</th>
						<th colspan="2">Operation</th>
					</tr>';
					
					foreach ($gardens as $garden) {
							echo '<tr>
							<td width="20%">'.$garden['nama'].'</td>
							<td width="20%">'.$garden['lokasi'].'</td>
							<td width="7%"><a class="btn btn-default" href="edit_garden.php?var='.$garden['id'].'" role="button">Edit</a></td>
							<td width="13%"><form action="del_garden.php" method="post" onSubmit="return konfirmasi();">
								<input type="hidden" name="id" value='.$garden['id'].' />
								<button type="submit" name="submit" value="delete" class="btn btn-default">Delete</button>
								</form>
							</td>
							</tr>';
						}
						echo '</table>';
					}
				?>
				<div class="col-lg-offset-9 col-lg-3" style="margin-top: 50px;">
					<a class="btn btn-default" href="add_garden.php" role="button">Add Garden</a>						
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
      return tanya;
  }
</script>
    
</body>
</html>
