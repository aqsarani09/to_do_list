<?php
include "db_conn.php";
$List = $_POST['list']; 
$id = $_POST['id'];
mysqli_query($conn, "UPDATE `todos` SET `list`='$List' WHERE id = $id"); 
header("location:index.php");
?>
