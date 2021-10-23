<?php
session_start();

if ($_SESSION['user_username'] && $_SESSION['user_id']) {
  
}
else{
  echo "<script type='text/javascript'>alert('You need to LOGIN')</script>";
  header('location:../login.php');
}
$_SESSION['user_id']; 
$_SESSION['user_username'];
$_SESSION['user_fname'];
$_SESSION['user_lname'];

// $username = false;
// $id = false;
// $rc_code = false;

 ?>
