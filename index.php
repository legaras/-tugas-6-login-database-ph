<?php 
session_start(); 
if(!isset($_SESSION["admin"])) { 
  header("Location:login.php"); 
  exit;
} 
echo "selamat datang " . $_SESSION["admin"]; 
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST"> 
        <input type="submit" value="logout" name="logout"> 
        <?php 
        if(isset($_POST['logout'])) { 
            session_destroy();
            header("Location:login.php"); 
            exit;
        } 
        ?> 
    </form>
</body>
</html>