<?php

include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY MY DATA</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <div class="col-lg-12">
        <h1 class="text-warning text-center"> display table data</h1>

        <table class="table table-striped table-hover table-bordered">

        <tr>
<th>Id</th>
<th>Username</th>
<th>Password</th>
<th>Delete</th>
<th>Update</th>


        </tr>

        <?php




     $q = "select * from curdtable";

     $query = mysqli_query($con,$q);

        while ($res = mysqli_fetch_array($query)) {





        ?>

        <tr>

        <td><?php echo $res['id']; ?></td>
<td><?php echo $res['username']; ?></td>
<td><?php echo $res['password']; ?></td>
<td><a class="btn-danger btn" href="delete.php?id=<?php echo $res['id']; ?>">Delete</a></td>
<td><a class="btn-success btn" href="update.php?id=<?php echo $res['id']; ?>">Edit</a></td>

        </tr>


        <?php
        }
        ?>
        </table>

    </div>
</div>
</body>
</html>