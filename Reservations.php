<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Reservations | PaddleWest</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<header> 
  
	<h1>PaddleWest</h1>

</header>
 <nav>
  <a class="item" href="Home.php">Home</a>
  <a class="item" href="Tours.php">Tours</a>
  <a class="item" href="Prices.php">Prices</a>
  <a class="item" href="ContactUs.php">Contact Us</a>
  <a class="item" href="FAQ.php">FAQ</a>
  <a class="item" href="Reservations.php">Reservations</a>
  <a class="item" href="Reviews.php">Reviews</a>
  <a class="item" href="Signup.php">Login/Signup</a>
 </nav>

 <br>
  <!--Users are told to log into their account so that they can make a reservation using a session variable-->
    <h2 id="Reservationstxt">
      To make a reservation please login into your account!
    </h2>
 <br>
  
     <form class="signup-form" action="ReservationLogin.inc.php" method="POST">
    <input type="text" name="uid" placeholder="Username" required>
    <input type="password" name="pwd" placeholder="Password" required>
    <button type="submit" name="reservationLogin"> Login </button>
    </form>
 
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
 
 
 
 
 
 
 
 
  <footer>
	<a href="https://www.wildatlanticway.com/home"> Wild Altlantic Way </a>
</footer>

</body>
</html>