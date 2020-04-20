<?php

/******************************/
// More info on connecting PHP and DB
// http://www.cs.virginia.edu/~up3f/cs4640/supplement/connecting-PHP-DB.html

/******************************/
// connecting to DB on XAMPP (local)

$host = 'localhost:3306';           // hostname
$dbname = 'uvalol';     // database name

// database credentials
$username = 'web4640';
$password = 'pwd4640';

/******************************/

$dsn = "mysql:host=$host;dbname=$dbname";
$db = "";

/** connect to the database **/
try 
{
   $db = new PDO($dsn, $username, $password);   
   // echo "<p>You are connected to the database</p>";
}
catch (PDOException $e)     // handle a PDO exception (errors thrown by the PDO library)
{
   // Call a method from any object, 
   // use the object's name followed by -> and then method's name
   // All exception objects provide a getMessage() method that returns the error message 
   $error_message = $e->getMessage();        
   echo "<p>An error occurred while connecting to the database: $error_message </p>";
}
catch (Exception $e)       // handle any type of exception
{
   $error_message = $e->getMessage();
   echo "<p>Error message: $error_message </p>";
}

?>