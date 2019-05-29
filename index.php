<?php
  session_start();
  //check session data
  if(isset($_SESSION['id'])){

  	include 'dashboard.php';

  }else{
  	include 'pages/login.php';

  }  
?>