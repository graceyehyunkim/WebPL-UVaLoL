<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="navbar.css">  
</head>
<body style="background-color: rgb(49, 49, 49);">
<?php session_start();?>
<?php
if (count($_SESSION) > 0) {   
   foreach ($_SESSION as $key => $value) {   	
      unset($_SESSION[$key]);
   }      
   session_destroy();   
   header('refresh:3; url=home.php');
}
?>

<h1 style="font-family: Roboto; color: rgb(199, 157, 80);"> Successfully logged out! Redirecting to home in 3... </h1>


</body>
</html>