<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Login/ Sign up | PaddleWest</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<header> 
  
	<h1> PaddleWest</h1> 
  

   
	</header>
 <nav>
  <a class="item" href="Home.php">Home</a>
  <a class="item" href="Tours.php">Tours</a>
  <a class="item" href="Prices.php">Prices</a>
  <a class="item" href="ContactUs.php">Contact Us</a>
  <a class="item" href="FAQ.php">FAQ</a>
  <a class="item" href="Reservations.php">Reservations</a>
  <a class="item" href="Reviews.php">Reviews</a>
 </nav>
  <br><br>
  
  <h2 class="txt1">
    Log in to your account here!
  </h2>
  <!--Log in form-->
    <form class="signup-form" action="Login.inc.php" method="POST">
    <input type="text" name="uid" placeholder="Username" required>
    <input type="password" name="pwd" placeholder="Password" required>
    <button type="submit" name="login"> Login </button>
    </form>
  <br><br>
  
  <h2 class="txt1">
    Register as a <i>PaddleWest</i> member today!
  </h2>
  
 <!--signup form--> 
  <form class="signup-form" action="Signup.inc.php" method="POST">
    <input type="text" name="first" placeholder="First Name" required>
    <input type="text" name="last" placeholder="Last Name" required>
    <input type="email" name="email" placeholder="E-Mail" required>
    <input type="text" name="uid" placeholder="Username" required>
    <input type="password" name="pwd" placeholder="Password" required>
    <button type="submit" name="Registerbtn"> Sign Up</button>
  </form>
  
  <br><br><br><br><br><br><br><br><br><br>
  
 <footer>
	<a href="https://www.wildatlanticway.com/home"> Wild Altlantic Way </a>
</footer>

</body>
</html>
