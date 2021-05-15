<?php 

$server="localhost";
$username="root";
$password="";
$db="banking_system";


$conn=mysqli_connect($server,$username,$password,$db) or die(mysqli_error());

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>
