<?php

$title = $_POST['title'];
$price = $_POST['price'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "shoppingcart";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}

if( $conn ){
    echo 'Conn created';
}

 $sql ="insert into product( title, price, imageUrl) VALUES ('$title'  , $price, 'url')";
 if ($conn->query($sql)) {
    echo "New record created successfully";
  }
  else{
      echo 'its not correct'. $sql;
  }

$conn->close();



?>