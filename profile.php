<?php
session_start();
   include_once'header.php';
   include_once'includes/dbh.inc.php';
   include_once'includes/function.inc.php';
?>


<div class="container mt-5" data-aos="fade-up">
  <div class="row mt-5">
  <div class="col-md-8 text-center mt-5 ">
  <?PHP
  $sql= "SELECT * FROM users";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)){
  while($row=mysqli_fetc_assoc($result)){
  $id=$row['userUid'];
  
  $sqlImg= "SELECT * FROM profileimg WHERE userid='$id'";
  $resultImg=mysqli_query($conn,$sqlImg);
  while($rowImg=mysqli_fetc_assoc($resultImg)){
  
  echo"<div>";
  
  if($rowImg['status'] == 0){
  
  
  echo "<img src='uploads/profile".$id.".jpg'>";
  
  }
  else{
  
  
  echo "<img src='uploads/profiledefault.jpg'>";
  
  }
  
  echo $id;
  echo"</div";
  }
  }
  }
else{
  echo "no users yet";
  }
  
  
  if(isset($_SESSION['useruid'])){
  
 /* if ($_SESSION["useruid"]= $userExists["userUid"]){
  
  echo "you are logged in as".$_SESSION["useruid"];
 
  }*/
  
  echo "<p class='mt-5 welcome'>hello there ".$_SESSION["useruid"]."</p>";
  
 echo "<form action='includes/upload.inc.php' method='POST' enctype='multipart/form-data'>'
  <input type='file' name='file'>
  
  <button type='submit' name='submit'>UPLOAD </button>
  </form>";
 }
 
 
  
  
  
  ?>
  
  
  <?php
  
  if(isset($_GET['success'])){
  
  echo "<p>upload successful</p>";
  
  }
  ?>







<?PHP
   include_once 'footer.php';
   ?>
   
   