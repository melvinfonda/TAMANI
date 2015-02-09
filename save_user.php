<html>
<body>
<?php
$con=mysqli_connect("localhost","root","","tamani");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$username = mysqli_real_escape_string($con, $_POST['Username']);
$password = mysqli_real_escape_string($con, $_POST['Password']);

mysqli_query($con,"INSERT INTO user (username , password)
VALUES ('$username', '$password')");

mysqli_close($con);


header('Location: index.php');
?>
</body>
</html>