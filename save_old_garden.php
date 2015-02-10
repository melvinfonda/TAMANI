<html>
<body>
<?php
$id = $_GET['var'];
$con=mysqli_connect("localhost","root","","tamani");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$namataman = mysqli_real_escape_string($con, $_POST['Nama']);
$lokasi = mysqli_real_escape_string($con, $_POST['Lokasi']);

mysqli_query($con,"UPDATE taman SET nama='$namataman' , lokasi='$lokasi' WHERE id=$id");
mysqli_close($con);


header('location: crud_taman.php');
?>
</body>
</html>