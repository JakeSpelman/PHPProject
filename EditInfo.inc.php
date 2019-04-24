<?php
session_start();
//creating a variable for the new username the user inputs into the New Username field
$newuid = $_POST['newusername'];
$uid = $_SESSION['login'];

include_once 'Connection.php';
$conn = Connect();

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//selecting username from database and linking it to username stored in session variable 
$sql = "SELECT user_first FROM Users WHERE user_first = $uid";
//updating the database with the new username. Once the user logs back into their account, their new username will appear
$newsql = "UPDATE Users SET user_uid = '$newuid' WHERE user_uid = '$uid'";


if ($conn->query($newsql) === TRUE) {
    header('Location: Signup.php' );
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

