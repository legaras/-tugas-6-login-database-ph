<?php 
$servername = "localhost"; 
$username   = "root"; 
$password = ""; 
$dbname = "dbtugas6";  

 
$conn = mysqli_connect($servername,$username,$password,$dbname); 
 

if(mysqli_connect_errno()) { 
  die("connection failed : " . mysqli_connect_error()); 
} 
