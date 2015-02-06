<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if ($_POST['submit'] == "login") {
if (empty($_POST['username']) || empty($_POST['password'])) {
	$error = "Username or Password is invalid";
	
} else {
	// Define $username and $password
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysqli_connect("localhost", "root", "");
	
	// To protect mysqli injection for Security purpose
	$username = stripslashes($username);
	$password = stripslashes($password);
	$username = $connection->real_escape_string($username);
	$password = $connection->real_escape_string($password);
	
	// Selecting Database
	$db = $connection->select_db("tamani");
	
	// SQL query to fetch information of registerd users and finds user match.
	$query = $connection->query("SELECT * FROM 
((SELECT user.*, 10 level FROM user NATURAL JOIN masyarakat) UNION
(SELECT user.*, 20 level FROM user NATURAL JOIN dinas_pertamanan) UNION
(SELECT user.*, 30 level FROM user NATURAL JOIN dinas_terkait)) temp
WHERE username='$username' AND password='$password';");
	var_dump($query);
	$rows = $query->num_rows;
	if ($rows == 1) {
		$row = $query->fetch_assoc();
		$_SESSION['login_user']= $username; // Initializing Session
		$_SESSION['privilege'] = (int)$row['level'];
		
	} else {
		$error = "Username or Password is invalid";
	}
	
	$connection->close(); // Closing Connection
}}
if ($_POST['submit'] == "logout") {
	session_destroy();
}
} // END if (isset($_POST['submit']))
?>