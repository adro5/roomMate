<?php
session_start();
$conn = new mysqli("localhost", "root", "", "roommates",3306);
$smoke = $_POST['smoke'];
$noise = $_POST['noise'];
$zodiac = $_POST['zodiac'];
$pets = $_POST['pets'];
$coed = $_POST['coed'];
$city = $_POST['city'];
$state = $_POST['state'];

$email = $_POST['email'];
$phone = $_POST['phone'];
$bestr = $_POST['bestr'];

$face = $_POST['face'];
$twit = $_POST['twit'];
$tumblr = $_POST['tumblr'];
$insta = $_POST['insta'];
$user = $_SESSION['user'];

$sql = "INSERT INTO preferences (Smoking, Noiselevel, Zodiac, Pets, User_Userid, Cohab, DestinationCity, DestinationState) VALUES ('$smoking','$noise','$zodiac','$pets','$user', '$coed', '$city', '$state')";

if(!mysqli_query($conn, $sql))
{
	echo 'Not Inserted';
}
$sql2 = "INSERT INTO contact (Phone, ContactPreference, User_Userid, Email) VALUES ('$phone','$bestr','$user','$email')";
if(!mysqli_query($conn, $sql2))
{
	echo 'Not Inserted';
}
$sql3 = "INSERT INTO social (Facebook, Twitter, Tumblr, Instagram, User_Userid) VALUES ('$face','$twit','$tumblr', '$insta','$user')";
if(!mysqli_query($conn, $sql3))
{
	echo 'Not Inserted';
}
else
{
	header('Location: login.html');
}

?>