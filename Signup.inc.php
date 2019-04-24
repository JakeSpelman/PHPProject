<?php

require 'Connection.php';

$conn = Connect ();

//all of this will happen if the signup button is pressed 
if( isset($_POST['Registerbtn'])){
}

$first = $conn->real_escape_string($_POST['first']);
$last = $conn->real_escape_string($_POST['last']);
$email = $conn->real_escape_string($_POST['email']);
$uid = $conn->real_escape_string($_POST['uid']);
$pwd = $conn->real_escape_string($_POST['pwd']);

//inserting data from signup form into database
$query = "INSERT INTO Users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd')" ;
$success = $conn->query($query);  

if (!$success){
  
  
  die($conn ->error);
}


$conn->close();

?>

<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
<title> PaddleWest</title>
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
  <a class="item" href="Signup.php">Login/Signup</a>
 </nav>
  
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  
    <h2 id="RegisterSuccess">
      Your registration has been successful! Welcome to the <i>PaddleWest</i> family!
     </h2>
  
      <p id="txt2">
        Please use the navigation above to log into your account and enjoy the benefits of being a <i>PaddleWest</i> member!
      </p>
  
  <br>
  <br>
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
  
