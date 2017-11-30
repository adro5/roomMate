<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile</title>
</head>
<link rel="stylesheet" href="styles.css" />
</head>
<body bgcolor="#666666" class="loginimage">
<div id="background">
<h1 class="head"></h1>
<br />
<br />
<div align="center">
<div align="left">
<p class="text3">Description:<br /></p>
</div>

<?php
include('prefs.php');
$name = mysqli_query($conn, "SELECT fname FROM user where username = '$username'") or die("Failed to query database".mysqli_error());
echo "<p>First Name:&nbsp;</p>";
echo $name;

?>

<p class="text2">Age:&nbsp;</p>
<p class="text2">Gender:&nbsp;</p>
<br />

<h1 class="head">Living Info (if looking for room·Mate)</h1>
<p class="text2">Bedroom:&nbsp;</p>
<p class="text2">Bathrooms:&nbsp;</p>
<p class="text2">How many people he/she lives with:&nbsp;</p>
<br />

<h1 class="head">Preferences</h1>
<p class="text2">Smoking?:&nbsp;</p>
<p class="text2">Noise Level:&nbsp;</p>
<p class="text2">Zodiac Sign:&nbsp;</p>
<p class="text2">Pets:&nbsp;</p>
<p class="text2">Cohabitation Allowed?:&nbsp;</p>
<p class="text2">City Prefered to Live In:&nbsp;</p>
<p class="text2">State Prefered to Live In:&nbsp;</p>
<br />

<h1 class="head">Social Media</h1>
<p class="text2">Facebook:&nbsp;</p>
<p class="text2">Twitter:&nbsp;</p>
<p class="text2">Instagram:&nbsp;</p>
<p class="text2">Tumblr:&nbsp;</p>
<br />

<h1 class="head">Contact</h1>
<p class="text2">Phone:&nbsp;</p>
<p class="text2">E-Mail:&nbsp;</p>
<p class="text2">Best Reached By:&nbsp;</p>
<br />

<h1 class="head">Location</h1>
<p class="text2">Zip Code:&nbsp;</p>
<br />
</div>
</div>
</html>
