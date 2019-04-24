<?php
session_start();
include_once 'Connection.php';
$conn = Connect();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title> Edit | PaddleWest</title>
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
  <a class="item" href="Logout.inc.php">Logout</a>
 </nav>
  <br>
  <br>
  <h2 id="edittxt">
    Update your information here!
  </h2>
  <?php
  //storing username in a session variable so that it is echoed out into update form
    $uid = $_SESSION['login'];
  //when session variable is set the form to update username is echoed
      echo"<form action='EditInfo.inc.php' method='POST' class='editForm'>
        <input type='text' name='username' value='$uid' readonly>
        <br>
        <input type='text' name='newusername' placeholder='New Username' required>
        <br>
        <button type='submit' name='updateUid'>Update</button>
         </form>";
      echo"<br>"; 
  
  
  ?>
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