<?php
  $conn =mysqli_connect("localhost","root","","ajaxform");
  if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
  }

?>