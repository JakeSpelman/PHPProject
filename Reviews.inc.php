  <?php
  session_start();
  include_once 'Connection.php';
  $conn = Connect();


    if(isset($_POST['commentSubmit'])){
      header( 'Location: Reviews.php');
    }
  //these are the parameters of the form to enter into the database using a post array. The post array is more secure than get as it does not display the information in the URL bar
  $uid = $conn->real_escape_string($_POST['uid']);
  $date = $conn->real_escape_string($_POST['date']);
  $message = $conn->real_escape_string($_POST['message']);
  
  //inserting data into database 
  $query = "INSERT INTO Comments (username, date, message) VALUES ('$uid', '$date', '$message')";
  $success = $conn->query($query);
  
//if it all is successful, data is inserted into the database and the comment appears in the table
  if(!$success){
    header( 'Location: Reviews.php');
    
    die($conn->error);
  }
  
  $conn->close();