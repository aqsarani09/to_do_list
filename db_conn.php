<?php
$dbName = "to_do_list";
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    
}
?>
