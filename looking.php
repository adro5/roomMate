<?php
session_start();
$beds = $_POST['beds'];
$bath = $_POST['baths'];
$mates = $_POST['mates'];

$conn = new mysqli("localhost", "root", "", "roommates",3306);
$user = $_SESSION['user'];
$sql = "INSERT INTO isliving (Bed, Bath, NumRoomates, User_Userid) VALUES ('$beds','$bath','$mates','$user')";

if(!mysqli_query($conn, $sql))
{
	echo 'Not Inserted';
}
else
{
	header('Location: prefs.html');
}

?>