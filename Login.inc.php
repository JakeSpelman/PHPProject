<?php
session_start();
//taking information from login form to query database to see if information is correct
$uid= $_POST['uid'];
$pwd= $_POST['pwd'];

require 'Connection.php';
$conn = Connect();

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM Users WHERE user_uid= '$uid' AND user_pwd='$pwd'";
$result = $conn->query($query);

//if username and password are correct they are logged into their userpage 
if ($result-> num_rows > 0) {
  $_SESSION['login'] = $uid;
  header( 'Location: Userpage.php');
  //if information is not correct they are redirected to signup/login page with Login=failed displaying in URL
}else{
  header( 'Location: Signup.php?Login=failed');
}

$conn->close();
?>