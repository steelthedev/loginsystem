<?php 
session_start() 
?>

<?PHP
   include_once'header.php';
   
 ?>

<section class="mt-5">
<div class="container ">
<div class="row justify-content-center">
<div class="col-lg-8 col-md-8 mt-5 text-center">

<form action="includes/login.inc.php" method="POST">

<div class="form-group">
<input type="text"class="form-control"name="uid" placeholder="Username or Email">
</div>
<div class="form-group">
<input type="password" class="form-control"name="pwd" placeholder="password">
</div>

<button type="submit" class="btn btn-outline-white" name="submit">Log in</button>
</form>

<?PHP
 if(isset($_GET['error'])){
 
 
 if($_GET['error'] ==="emptylogininput"){
 
 echo "<p class='danger'>Input all credentials!</p>";
 
 }
 
 elseif($_GET['error'] ==="wrongpassword"){
 
 echo "<p class='danger'>Input password Retry!</p>";
 
 }
 }
 ?>
 
 
 

<?php

   include_once'footer.php';
   ?>