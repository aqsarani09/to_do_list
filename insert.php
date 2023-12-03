<?php
$LIST = $_POST['todoInput']; 
include "db_conn.php";
mysqli_query($conn, "INSERT INTO `todos` (`list`) VALUES ('$LIST')"); 
header("location:index.php");
?>
