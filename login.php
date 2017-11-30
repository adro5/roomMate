<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "", "roommates", 3306);

if (!$conn) { 
	die("Connection Failed: " . mysqli_connect_error());
}
if (empty($username) or empty($password))
{
	header('Location: login.html');	
	die();
}
$result = mysqli_query($conn, "select * from user where username = '$username' and password = '$password'") or die("Failed to query database".mysqli_error());

$row = mysqli_fetch_assoc($result);
if ($row['username'] == $username && $row['password'] == $password){
	
	$_SESSION["username"] = $username;
	$_SESSION["password"] = $password;
	$_SESSION["conn"] = $conn;
	header('Location: profile.html');
}
?>