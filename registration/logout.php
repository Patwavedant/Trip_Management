<?php 
 
session_start();
session_destroy();

header("location: http://localhost/Trip_Management/registration/login.php");
die;

?>