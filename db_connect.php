<?php 

 //Connect to database
  $conn = mysqli_connect('localhost','root','','website');
  
  //check the connection
  if(!$conn)
  {
	  echo 'Connection error: '.mysqli_connect_error();
  }
  
?> 