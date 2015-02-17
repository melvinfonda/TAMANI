<?php
	session_start();
	require_once('db_helper.php');
	$d_instansi = get_all_instansi();
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
                    <h2><br><br>Daftar Instansi</h2>
                </div>
                <div class="col-lg-offset-1 col-lg-2">
					<br><br><br><br><br>
					<div class="btn btn-default" role="button">
						<span class="glyphicon-plus"><a href="tambah_instansi.php">  Add Instansi</a></span>
					</div>
				</div>
				<div class="col-lg-12 text-center">
					<hr class="star-primary">
				</div>
            </div>
            <div class="row">
				<?php
					if (empty($d_instansi))
						echo '<p>Belum ada instansi.</p>';

					else {
						echo '<table class="table" id="custom_table" width="100%">
						<tr>
						<th>Nama</th>
						<th>Lokasi</th>
						<th>Kategori</th>
						<th colspan="2">Operation</th>
					</tr>';

					foreach ($d_instansi as $instansi) {
							echo '<tr>
							<td width="20%">'.$instansi['nama'].'</td>
							<td width="20%">'.$instansi['lokasi'].'</td>
							<td width="20%">'.$instansi['kategori'].'</td>
							<td width="7%"><a class="btn btn-default" href="edit_instansi.php?id='.$instansi['id'].'" role="button">Edit</a></td>
							<td width="13%"><form action="hapus_instansi.php" method="post" onSubmit="return konfirmasi();">
								<input type="hidden" name="id" value='.$instansi['id'].' />
								
								</form>
							</td>
							</tr>';
						}
						echo '</table>';
					}
				?>


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
