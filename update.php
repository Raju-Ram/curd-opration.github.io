<?php
include 'conn.php';

if(isset($_POST['done'])){
    $id = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['Password'];
   
   
   
       $q = " update curdtable set id=$id, username='$username', password='$password' where id=$id ";
   
   
   
      $query = mysqli_query($con,$q);

      header('location:display.php');

}

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

<div class="container" style="background-color: bisque; margin-top: 200px;">
  <h2>Insert opration</h2>
  <form  method="post">
    <div class="form-group">
      <label for="username">username:</label>
      <input type="text" class="form-control" id="name" placeholder="username" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Password">
    </div>
    
    <button style="margin-left: 300px;" type="submit" name="done" class="btn btn-default"  >Submit</button>
  </form>
</div>
</body>

</html>