<?php
//This file links the comment section to the database by sending a query and inserting data into table
include_once 'Connection.php';

$conn = Connect();

if (isset($_POST['commentSubmit'])){
  
}
//these are the parameters of the comments form
$uid = $conn->real_escape_string($_POST['uid']);
$date = $conn->real_escape_string($_POST['date']);
$message = $conn->real_escape_string($_POST['message']);

//inserting into database
$query = "INSERT INTO Comments (username, date, message) VALUES ('$uid', '$date', '$message' )" ;
$success = $conn->query($query);  

if (!$success){
  
  
  die($conn ->error);
}


$conn->close();