<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Home | PaddleWest</title>
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



 <!--this is the first body of text you see-->
	
	<section class="middle">
	<h2> <strong> Who are <i>PaddleWest</i>?</strong></h2>
	<p> 
	We are one of Ireland's only sea-kayak adventure companies- operating out of the West of Clare. We offer a wide array of different tours catering for each different skill-set and personal preferences. Whether you want to explore the many cliffs and caves around our beautiful part of the country, or discover the many native birds to Clare, we've got the tour for you!
	</p>
	</section>
<hr>

	
</br>
</br>
</br>
</br>
</br>
	<div id="TextA">
	<h3>
	Take a look at what you could be doing with us!
	</h3>
	
<!-- inputting a YouTube video and image side-by-side-->
	<iframe id="KayakTour" width="560" height="315" src="https://www.youtube.com/embed/6gyZEIXU-MI?start=109" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<img src="GroupKayak.jpg" alt="Group Kayak" width="560" height="315">
	</div>
	
</br>
</br>
</br>
</br>
<hr>

	<div id="TextB">
	<h3>
	Meet our instructors!
	</h3>
	</div>
<!-- Clearfix allows for photos to sit beside the text-->	
	<div class="clearfix">
		<dl>
			<dt><strong>Tom McGrath</strong></dt>
			<dd class="description">Tom is the longest standing instructor with <i>PaddleWest</i>. With his wealth of knowledge you're sure to learn a thing or two from him. Tom's speciality is the Cliffs and Caves tour, he knows them like the back of his hand!</dd>
			<img id="Tom" src="Tom.jpg" alt="Tom McGrath" width="150px" height="80px">
    </dl>
	</div>
			
			
	<div class="clearfix">
    <dl>
			<dt><strong>Mary Collins</strong></dt>
			<dd class="description" >Mary is an experienced kayaker having paddled for 17 years. She loves being outdoors, but more specifically being on the water. Mary has a degree in marine biology, but feels that kayaking is her calling. </dd>
			<img id="Mary" src="Mary.jpg" alt="Mary Collins" width="150px" height="80px">
    </dl>
    
	</div>
			
	
	<div class="clearfix">
    <dl>
			<dt><strong>Rory Cleary</strong></dt>
			<dd class="description">Rory is the newest recruit to the <i>PaddleWest</i> team. Although Rory is only 21, he has been on the water since he was 7 years old. The age of a 21 year old, but the knowledge of a 40 year old. Welcome to the team Rory!</dd>
			<img id="Rory" src="Rory.jpg" alt="Rory Cleary" width="120px" height="120px">
    </dl>
	</div>
			
	<div class="clearfix">
    <dl>
			<dt><strong>Colin Thompson</strong></dt>
			<dd class="description">Last but not least is Colin. Originally from Australia, we have accepted Colin as one of our own, an honourary Irishman! With a wealth of knowledge and a passion for kayaking, you're sure to be in good hands when paddling with Colin.</dd>
			<img id="Colin" src="Colin.jpg" alt="Colin Thompson" width="150px" height="80px">
	
		</dl>
		
	
	
	</div>
	
	</br>
	</br>
	
	
	
 <footer>
	<a href="https://www.wildatlanticway.com/home"> Wild Altlantic Way </a>
</footer>

</body>
</html>