<?php
session_start();
$firstname = $_POST['fname'];
$uname = $_POST['uname'];
$pword = $_POST['pword'];
$age = $_POST['age'];
$gen = $_POST['gen'];
$descr = $_POST['descr'];
$avspace = $_POST['avspace'];
$zcode = $_POST['zcode'];

$conn = new mysqli("localhost", "root", "", "roommates",3306);

if (!$conn) { 
	die("Connection Failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO user (ZIP, fname, Gender, Age, UserDescription, LivingSpaceAvailable, Active, photourl, username, password) VALUES ('$zcode','$firstname','$gen','$age','$descr','$avspace','1','bom.vo','$uname','$pword')";

if(!mysqli_query($conn, $sql))
{
	echo 'Not Inserted';
}
else
{
	$_SESSION["conn"] = $conn;
	if ($avspace == 1) {
		header('Location: looking.html');
	}
	else {
		header('Location: prefs.html');
	}
}

?>

