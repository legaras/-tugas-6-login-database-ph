<?php 
include 'koneksi.php';
$username = $_POST["username"]; 
$password = md5($_POST["password"]); 
$sql = "SELECT username, password FROM tbuser WHERE username='$username' AND
password='$password' LIMIT 1"; 
$result = mysqli_query($conn, $sql);
 
if(mysqli_num_rows($result) > 0) {
  session_start(); 
  $_SESSION["admin"] = $username;
  header("Location:index.php");
} else { 
    header("Location:login.php"); 
}