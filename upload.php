<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "roommates", 3306);

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
//Check if image file is real

if(isset($_POST["submit"])) {
	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	if($check == false) {
		trigger_error("File is not an image.", E_USER_ERROR);
		$uploadOk = 0;
	}	
}

if (file_exists($target_file)) {
	trigger_error("Sorry, file already exists.", E_USER_ERROR);
	$uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 500000) {
	trigger_error("Sorry, your file is too large.", E_USER_ERROR);
	$uploadOk = 0;
}

if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
	trigger_error("Sorry, only JPG, JPEG, & PNG files are allowed.", E_USER_ERROR);
	$uploadOk = 0;
}
if ($uploadOk == 0) {
	trigger_error("Sorry, your file was not uploaded.", E_USER_ERROR);
}
else {
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$insertimg = "update user set photourl = '$target_file' where username = '".$_SESSION["username"]."'";
		if (!mysqli_query($conn, $insertimg))
		{ trigger_error("Not connected to database", E_USER_ERROR); }
		else { header('Location: profile.html'); }
	} else {
		trigger_error("Sorry, there was an error uploading your file.", E_USER_ERROR);
	}
}
?>