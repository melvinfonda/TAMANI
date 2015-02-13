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
<title> TAMANI </title>
</head>

<body>


 <!-- Navigation -->
   <?php require_once('navbar.php'); ?>
   
      <!-- Registrasi Section -->
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><br><br>Daftar Instansi</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">                               
				<table class="table">
						<tr>
						<th>Nama Instansi</th>
						<th>Lokasi</th>
						<th>Kategori</th>
						<th colspan="2">Operation</th>
					</tr>
					<?php
						$d_instansi = get_all_instansi();
						foreach ($d_instansi as $instansi) {
							echo '<tr>
							<td>'.$instansi['nama'].'</td>
							<td>'.$instansi['lokasi'].'</td>
							<td>'.$instansi['kategori'].'</td>
							<td><a class="btn btn-default" href="edit_instansi.php?id='.$instansi['id'].'" role="button">Edit</a></td>
							<td><form action="hapus_instansi.php" onSubmit="return konfirmasi();">
								<input type="hidden" name="id" value='.$instansi['id'].' />
								<button type="submit" class="btn btn-default">Delete</button>
								</form>
							</td>
							</tr>';
							
						}
					?>					
				</table>				
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
      tanya=confirm('Apakah anda yakin menghapus instansi ini?');
      return tanya;
  }
</script>
    
</body>
</html>
