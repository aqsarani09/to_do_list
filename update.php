<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Update</title>
</head>
<?php
$id = $_GET['id'];
include "db_conn.php";

$Rdata = mysqli_query($conn, "select * from todos where id =$id");
$data = mysqli_fetch_array($Rdata);
if (!$Rdata) {
    die("Query failed: " . mysqli_error($conn));
}
?>
<body class="bg-info">
<form action="update1.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">

                <h2 class="text-center text-primary font-monospace">Update List</h2>
                <div class="col-10">
                    <input type="text" value ="<?php echo $data['list']?>" name ="list"class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary">Update</button>
                    <input type="hidden" value ="<?php echo $data['id']?>" name="id">
                </div>
            </div>  
        </div>
    </form>
</body>
</html>
