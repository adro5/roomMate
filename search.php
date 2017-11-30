<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "roommates", 3306);
$search = $_POST["search"];
$result = mysqli_query($conn, "select fname, Age, Gender, photourl from user where ZIP = '$search'");
$_SESSION["result"] = $result;
header("Location: search.html");

?>