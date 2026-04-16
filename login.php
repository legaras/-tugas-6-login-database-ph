<html lang="en"> 
<head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
  <title>Login</title> 
  <link rel="stylesheet" href="css/style.css">
</head> 
 
<body> 
  <div class="card">
    <div class="container">
        <h2 style="text-align: center;">LOGIN</h2>
        <form action="ceklogin.php" method="POST"> 
            <div> 
            <label for="username">username</label> 
            <input type="text" id="fname" name="username" placeholder="username"> 
            </div> 
            <div> 
            <label for="password">password</label> 
            <input type="password" id="lname" name="password" placeholder="password"> 
            </div> 
            <input type="submit" value="login"> 
        </form>  
    </div>
   </div>
</form>
</body> 
 
</html>