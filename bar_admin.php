<li class="page-scroll">
	<a href="crud_taman.php">Taman</a>
</li>
<li class="page-scroll">
	<a><?php echo $_SESSION['login_user']; ?> </a>
</li>
<li class="page-scroll">
	<form class="navbar-form navbar-right" action="login.php" method="post">
		<button name="submit" value="logout" type="submit" class="btn btn-default">Log Out</button>
	</form>
</li>