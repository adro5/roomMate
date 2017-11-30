<?php
session_start();
include('signup.php');
$beds = $_POST['beds'];
$bath = $_POST['baths'];
$mates = $_POST['mates'];

$max = mysqli_insert_id($_SESSION['conn']);
$max -= 1;
$sql = "INSERT INTO isliving (Bed, Bath, NumRoomates, User_Userid) VALUES ('$beds','$bath','$mates','$max')";

if(!mysqli_query($_SESSION['conn'], $sql))
{
	echo 'Not Inserted';
}
else
{
	$delete = "DELETE FROM user ORDER BY Userid DESC LIMIT 1";
	mysqli_query($_SESSION['conn'], $delete);
	$_SESSION['max'] = $max;
	header('Location: prefs.html');
}

?>