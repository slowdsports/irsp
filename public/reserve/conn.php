<?php
$conn = mysqli_connect("localhost","admin","rootpass2022","promedia4");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>