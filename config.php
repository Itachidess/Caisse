<!-- <> ---------------------- -->
<?php

$host = "localhost";
$name = "caisse";
$username ="root";
$password = "";


$conn =  mysqli_connect($host ,$username,$password,$name);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>