
<?php
//Connection file to the database
function Connect()
{
$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "115378536";
    
    
$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname) or die($conn->connect_error);
  
return $conn;
}

?>