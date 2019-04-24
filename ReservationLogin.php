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

  
  
 <!--This code for the form was taken from the lab8 slides-->
 <main class="ReservationsBody">
 <h2>Book with us today!<h2>
 <div id="form_container">
	<form>
		<label for="firstname"> First Name:</label>
		<input type="text" name="firstname"><br>
		<label for="lastname"> Last Name:</label>
		<input type="text" name="lastname"><br>
		<label for="emailaddress"> Email:</label>
		<input type="email" name="emailaddress"><br>
		<label for="message"> Which tour?</label>
		<textarea name="message" rows="6" cols="24"> </textarea><br>
		<input type="submit" value="Submit" onclick="myFunction()">
	</form>
</div>
 <!--javascript adapted from a w3schools tutorial on how to do an onclick event-->
 <script>
	function myFunction(){
		window.open(href="Booking.html");
	}
	</script>
 
 
 
 
 
 
 
 
 
 
 
  <footer>
	<a href="https://www.wildatlanticway.com/home"> Wild Altlantic Way </a>
</footer>

</body>
</html>