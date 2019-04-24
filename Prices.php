<?php 
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title> Prices | PaddleWest</title>
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
 
 </br>
 </br>
 
 <!--Using a table to display the prices-->
	<main>
		<table>
			<tr class="top1">
				<th colspan="5"> Night-Time Tour</th>
			</tr>
			<tr>
				<th>Adult</th>
				<th>Student</th>
				<th>Child</th>
				<th>Groups 5&plus;</th>
			</tr>
			<tr>
				<td>&euro;45</td>
				<td>&euro;30</td>
				<td>&euro;20</td>
				<td>&euro;35p/p</td>
			</tr>
		</table>
 </br>
 </br>
 </br>
 <!-- "colspan="5" allows for one cell to spread across the whole table. This was adapted from Lab8-->
		<table>
			<tr class="top1">
				<th colspan="5"> Cliffs &amp; Caves</th>
			</tr>
			<tr> 
				<th>Adult</th>
				<th>Student</th>
				<th>Child</th>
				<th>Groups 5&plus;</th>
			</tr>
			<tr>
				<td>&euro;60</td>
				<td>&euro;45</td>
				<td>&euro;35</td>
				<td>&euro;50p/p</td>
			</tr>
		</table>
</br>
</br>
		<table>
			<tr class="top1">
				<th colspan="5"> Wildlife Tour</th>
			</tr>
			<tr>
				<th>Adult</th>
				<th>Student</th>
				<th>Child</th>
				<th>Groups 5&plus;</th>
			</tr>
			<tr>
				<td>&euro;50</td>
				<td>&euro;35</td>
				<td>&euro;25</td>
				<td>&euro;30p/p</td>
			</tr>
		</table>
</br>
</br>
		<table>
			<tr class="top1">
				<th colspan="5"> Picnic Tour</th>
			</tr>
			<tr>
				<th>Adult</th>
				<th>Student</th>
				<th>Child</th>
				<th>Groups 5&plus;</th>
			</tr>
			<tr>
				<td>&euro;100</td>
				<td>&euro;85</td>
				<td>&euro;60</td>
				<td>&euro;80</td>
			</tr>
		</table>
</br>
</br>
</br>
				
 
 
 
 
 
 <footer>
	<a href="https://www.wildatlanticway.com/home"> Wild Altlantic Way </a>
</footer>

</body>
</html>