<?php
session_start();
?>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<a class="navbar-brand" href="index.php">TAMANI</a>
			
		</div>
		<ul class="nav navbar-nav navbar-right">
				<li class="page-scroll">
					<a href="http://www.google.com/search?q=daftar+pengaduan">Daftar Pengaduan</a>
				</li>
				<li class="page-scroll">
					<a href="http://www.google.com/search?q=daftar"><span class="glyphicon glyphicon-user"></span> Daftar</a>
				</li>
				<?php
					if (isset($_SESSION['login_user']))
						require_once('bar_logged.php');
					else
						require_once('bar_login.php'); 
				?>
			</ul>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>