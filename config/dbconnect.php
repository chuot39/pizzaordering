<?php 
  $mysqli = new mysqli($_SERVER['SERVER_NAME'], "root", "", "pizza-non-mcv"); 
  if ($mysqli->connect_error) 
    die("ERROR: ".$mysqli->connect_error);
?>