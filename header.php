<?php 
session_start() 
?>


<!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="utf-8">
 <title>I-Construct</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
 <!-- Favicons -->
 <link href="img/favicon.png" rel="icon">
 <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
 
 <link href="css/aos.css" rel="stylesheet">
 <link href="cs/bootstrap.min.css" rel="stylesheet">
 <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
 
 <!-- Libraries CSS Files -->
 <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
 <link href="lib/animate/animate.min.css" rel="stylesheet">
 <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
 <link href="css/owl.carousel.min.css" rel="stylesheet">
 <link href="css/owl.theme.default.min.css" rel="stylesheet">
 <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
 
 <!-- Main Stylesheet File -->
 <link href="css/style.css" rel="stylesheet">
 </head>
 
 
 
 <body>

<header>
  
  <nav class="navbar bg-dark fixed-top ">
 
  <div class="nav-brand  ">WATCH</div>
  
  <i class="fa fa-bars pull-right nav-button"></i>
  
  <!--<button class="navbar-toggler btn-sm" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle-navigation">
  <i class="fa fa-bars "></i>-->

  </nav>
  
  </header>
 
 <div class="container">
 <div class="side-bar justify-content-center">
  <ul class="nav-menu text-center">
  <li class="nav-item"><a href="./index.php" >Home</a></li>
  <li class="nav-item"><a href="#about">About us</a></li>
  <li class="nav-item"><a href ="#services">Services</a></li>
  <?PHP
  if(isset($_SESSION["useruid"])){
 
   echo "<li class='nav-item'><a href ='profile.php'>profile</a></li>";
   
   echo "<li class='nav-item'><a href='includes/logout.inc.php'>Log out</a></li>";
   }
   
  else{
  echo "<li class='nav-item'><a href ='signup.php'>Sign up</a></li>";
  echo "<li class='nav-item'><a href='login.php'>Log in</a></li>";
  }
  
 ?>
  
  <li class="nav-item"><a href="#contact">Contact us</a></li>
  </ul>
  </div>
  </div>
  
  