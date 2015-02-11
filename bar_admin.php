<li class="page-scroll">
	<a href="index.php">Daftar Laporan</a>
</li>
<li class="page-scroll">
	<a href="index.php">Daftar Pengaduan</a>
</li>
<li class="page-scroll">
	<a href="entri_aduan.php">Tambah Pengaduan</a>
</li>
<li class="page-scroll">
	<form class="navbar-form navbar-right" method="post">
		Selamat datang <?php echo $_SESSION['login_user']; ?>
		<button name="submit" value="logout" type="submit" class="btn btn-default">Log Out</button>
	</form>
</li>