<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title> FAQ | PaddleWest</title>
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
 
 </br>
 </br>
 </br>
 
<h2 id="FAQ">Some of our Frequently Asked Questions:</h2>
</br>
</br>
<!--The collapsible and subsequesnt javascript was adapted from a w3schools tutorial-->
	<button class="collapsible">What do I have to bring with me?</button>
		<div class="content">
			<p>We recommend to bring with you a spare pair of clothes, a towel, some fresh socks and possibly something to eat for afterwards. Paddling can be a bit tiring!</p>
		</div>
	<button class="collapsible">What is your cancellation policy?</button>
		<div class="content">
			<p>We require cancellations to be made at least 48 hours in advance. This can be done via email (paddlewest@gmail.com) or via phone (065687845983) </p>
		</div>
	<button class="collapsible">Am I too big for the kayak?</button>
		<div class="content">
			<p>A kayak can hold a weight of 200kg and a person of height 6'7"</p>
		</div>
	<button class="collapsible">What if I have never kayaked before?</button>
		<div class="content">
			<p>Don't worry, it's easy! All of our tours cater for all skill sets so you have nothing to fear. It's all about having fun on the water!</p>
		</div>
	<button class="collapsible">How do I get there?</button>
		<div class="content">
			<p>Our HQ is based in the Doolin tourism office, so all our tours begin here. From here we will take a short shuttle bus ride to the water and that is where the real fun begins!</p>
		</div>
	<button class="collapsible">Are you open all year round?</button>
		<div class="content">
			<p> Yes, we are open all year round, 7 days a week!</p>
		</div>
<!--javascript taken from above w3schools tutorial-->		
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
</br>
</br>
</br>
	
 
 
 
 
 
 
 
 
 <footer>
	<a href="https://www.wildatlanticway.com/home"> Wild Altlantic Way </a>
</footer>

</body>
</html>