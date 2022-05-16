<?php

//connect to DB
$conn = mysqli_connect('localhost', 'mintz', 'Ethan2887@', 'pizza_delight');

//check connection
if(!$conn) {
  echo ' connection error: ' . mysqli_connect_error();
}

?>