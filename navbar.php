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
			<?php
				if (isset($_SESSION['privilege'])) {
					$privilege = $_SESSION['privilege'];
					if ($privilege === 10)
						require_once('bar_logged.php');
					else if ($privilege === 30)
						require_once('bar_terkait.php');
				} else
					require_once('bar_login.php'); 
			?>
		</ul>

		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>
