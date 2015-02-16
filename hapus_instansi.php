<?php
	$con=mysqli_connect("localhost","root","","tamani");
    
	if (mysqli_connect_errno()) {
    	echo "Fail to connect to database".mysqli_connect_error();
    }
	
	if (isset($_POST['id'])) {
		$hapus = $_POST['id'];
		$strSql = "delete from instansi where id=$hapus";
		mysqli_query($con, $strSql);
		header("Location: daftar_instansi.php");
	}
	mysqli_close($con);
?>
