<?php
//destroys session variable once logout button is pressed. The user is then logged out
session_start();

session_destroy();
header( 'Location:Home.php');
?>