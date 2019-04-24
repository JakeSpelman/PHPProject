<?php
session_start();
//this function sets the correct timezone for our location.
date_default_timezone_set('Europe/Dublin');
include_once 'Connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title> Reviews | PaddleWest</title>
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
  
   <img src="reviewpic.jpg" alt="Group Kayak" class="ReviewPic">
  
  <br>
  <br>
  
  <h2 id="reviewtxt">
    Leave reviews, comments and any general kayaking discussions here!
  </h2>
  <br>
  
<?php
  
include_once 'Connection.php';
$conn = Connect();
  //this is the php form to leave a comment on the reviews page.
    echo "<form action='Reviews.inc.php' method='POST' cellpading='3'>  
    <input id='reviewsuid' type='text' name='uid' placeholder='Username' required><br>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <textarea id='reviewstextarea' name='message' placeholder='Message' required> </textarea><br>
    <button id='reviewSubmit' name='commentSubmit' type='submit'>Comment</button>
    </form>";
   echo"<br>";
  
  //this function then displays all comments made onto a table. It queries database to select all comments in the database and display them in the table
$sql = "SELECT * FROM Comments";
$result = mysqli_query($conn, $sql);
  
  if(mysqli_num_rows($result) > 0){
    
    echo"<table id='reviewtable'  cellpadding='3'>";
    echo"<tr><th>Username</th><th>Date</th><th>Message</th>";
    while($row = mysqli_fetch_assoc($result)){
      echo"<tr><td> ".$row["username"]." </td><td> ".$row["date"]." </td><td> ".$row["message"]."</td></tr>";
    } 
    
    echo"</table>";
    
  }else{
    echo"0 results";
  }
  
  

  
  
 ?>
  
  <br>
  <br>
<footer>
	<a href="https://www.wildatlanticway.com/home"> Wild Altlantic Way </a>
</footer>

</body>
</html>