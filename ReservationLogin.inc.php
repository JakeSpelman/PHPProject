<?php
session_start();
//this file is pretty much identical to login.inc.php. It queries database to make sure that information is coorect and so that the user can log in to make a booking.
$uid= $_POST['uid'];
$pwd=$_POST['pwd'];

include_once 'Connection.php';
$conn = Connect();

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM Users WHERE user_uid= '$uid' AND user_pwd='$pwd'";
$result = $conn->query($query);

if ($result-> num_rows > 0) {
  $_SESSION['reservationLogin'] = $uid || $pwd;
  header( 'Location: ReservationLogin.php');
}else{
  header( 'Location: Reservations.php?Login=failed');
}

$conn->close();
?>