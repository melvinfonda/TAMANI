<?php
	$con=mysqli_connect("localhost","root","","tamani");
    if (mysqli_connect_errno()){
    	echo "Fail to connect to database".mysqli_connect_error();
    }
	if (isset($_GET['id'])){
		$hapus=$_GET['id'];
		$strSql= "delete from taman where id=$hapus";
		mysqli_query($con,$strSql);		
	    if (!mysqli_query($con,$strSql)){
			header("Location:crud_taman.php");
		}
		else{
			header("Location:index.php");
		}
	}
	mysqli_close($con);
?>
