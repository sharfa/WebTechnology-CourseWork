<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'details';//db name

   // Create connection
   $conn =  mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
    } 

    $commentName = $_POST['name'];
    $commentEmail = $_POST['email'];
    $comment = $_POST['message'];
    $commentRate = $_POST['rate'];

    $sql = "INSERT INTO `contact`(`name`,`email`,`comment`,`rate`)
    VALUES('$commentName','$commentEmail','$comment','$commentRate')";

    $result = mysqli_query($conn, $sql);
    
    if (!$result) {    
    	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     
    } else { 
     
  	header("Location: " . $_SERVER ["HTTP_REFERER"]);
    } 
  
    mysqli_close($conn); 
?>
