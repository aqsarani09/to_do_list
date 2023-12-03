<?php
include "db_conn.php";
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM `todos` WHERE id = $id"); 
header("location: index.php");
?>
