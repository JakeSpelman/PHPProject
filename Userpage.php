<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> User | PaddleWest</title>
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
<?php  
  //username is held in a session variable from login.inc.php. This h2 tag is echoing out username and changes for every user as when they sign into their accont their username is stored in the session variable from the login button
  $uid = $_SESSION['login'];
  
  echo"<h2 class='userHeading'> Welcome to your personal page $uid! </h2>"
?>

  
  <img class="userimg" src="user.png" alt="user">
  


  
  
<article id="utxt">
  <p class="usertxt">
     Thank you for signing up to become a member of the <i>PaddleWest</i> family!
    <br>
    <br>
    <i>PaddleWest</i> offer some of the most comprehensive and in depth kayaking tours in Ireland, specialising in the wonderful scenery around the West of Clare.
    <br>
    <br>  
    We pride ourselves on having some of the country's best kayaking instructors who aim to guide and teach you about our beautiful part of the country, all while having fun that is!
    <br>
    <br>
    Join in on our reviews page by giving your review of one of our tours or tour instructors, or maybe just about kayaking in general. At the end of the day, <i>PaddleWest</i> is a family.  
  </p>
</article>
 
     <h4 id="editinfo">
     <a href="EditInfo.php">Edit your profile here!</a>
     </h4>
  
   <footer>
	<a href="https://www.wildatlanticway.com/home"> Wild Altlantic Way </a>
</footer>

</body>
</html>