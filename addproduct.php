<?php

if(isset($_POST['title'])){
    echo $_POST['title'];
    echo $_POST['price'];
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<form id="form" >
  <label for="fname">Product Title</label>
  <input type="text" id="fname" name="title"><br><br>
  <label for="lname">Price</label>
  <input type="text" id="lname" name="price"><br><br>
  <input type="submit" value="Submit">
</form>
<script>

$("#form").submit(function(event){

// Prevent default posting of form - put here to work in case of errors
event.preventDefault();

// Abort any pending request

// setup some local variables
var $form = $(this);


// Serialize the data in the form
var serializedData = $form.serialize();


// Fire off the request to /form.php
request = $.ajax({
    url: "/recievedata.php",
    type: "post",
    data: serializedData,
    success: function (response) {

        console.log(response);
    },
    error: function(jqXHR, textStatus, errorThrown) {
    console.log(textStatus, errorThrown);
    }

});

});

</script>
</body>
</html>

