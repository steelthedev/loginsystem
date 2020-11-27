<?PHP
include_once'header.php';
 ?>


<div class="container mt-5">
 <div class="row justify-content-center">
 <div class="col-lg-8 col-md-8 mt-5">
 
 <form action="includes/signup.inc.php" method="POST">
 
 <div class="form-group">
 <input type="text"class="form-control"name="name" placeholder="Full name">
 </div>
 <div class="form-group">
 <input type="text" class="form-control"name="email" placeholder="Email">
 </div>
 <div class="form-group">
 <input type="text" class="form-control"name="uid" placeholder="Username">
 </div>
 <div class="form-group">
 <input type="password" class="form-control"name="pwd" placeholder="password">
 </div>
 <div class="form-group">
 <input type="password" class="form-control"name="pwdrepeat" placeholder="Confirm password">
 </div>
 
 <button type="submit" class="btn btn-outline-white" name="submit">Sign up</button>
 </form>
 <p>Proceed to <a class="btn btn-outline-white" href="login.php">Log in</a></p>
 
 <?PHP
 if(isset($_GET['error'])){
 
 
 if($_GET['error'] ==="emptyinput"){
 
 echo "<p class='danger'>Input all credentials</p>";
 
 }
 
 elseif($_GET['error'] ==="invaliduid"){
 
 echo "<p class='danger'>Input invalid.Retry!</p>";
 
 }
 
 elseif($_GET['error'] ==="pwderror"){
 
 echo "<p class='danger'>Password does not match</p>";
 
 }
 
 elseif($_GET['error'] ==="uidexists"){
 
 echo "<p class='danger'>Username is Taken!</p>";
 
 }
 
 
 elseif($_GET['error'] ==="none"){
 
 echo "<p class='success'>Registeration successful</p>";
 
 }
 
 
 
 
 
 
 
 
 }
 
 
 
 
 
 
 
 
 
 ?>
 
 
 
 
 
 
 <?PHP 
 include_once'footer.php';
 ?>