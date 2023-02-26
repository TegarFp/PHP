<?php 

$dbHots = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "phptutorial";

// Connection to Database
$conn = mysqli_connect($dbHots, $dbUser, $dbPass, $dbName);

if (!$conn){
  die ("Database Connection Failed !");
}

?>