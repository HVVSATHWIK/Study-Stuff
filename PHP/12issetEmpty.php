<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" 
content="width=device-width, 
initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method = 
"post">
    <label>Username:</label><br>
    <input type="text" 
name="username"><br>
    <label>Password:</label><br>
<input type="text" name="password"><br>
<input type="submit" name = "login" 
value="Log in">
  </form>
</body>
</html>

<?php
   //isset() = Returns TRUE if a variable 
//is declared and not null
   //empty() = Returs TRUE if a variable 
//is not declared,  false, null,""

  //  foreach($_POST as $key => $value){
    // echo "{$key} = {$value}<br>";
  //  }

   if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username)){
      echo "Usename is missing";
    }
    else{
      echo"Hello{$username}";
    }

   }

   //$username =$_POST["username"];
   //$password = $_Post["password"];

   if(isset($username)){
    echo "Username is set <br>";
   }
   else{
    echo "Username is not set <br>";
   }

   if(empty($username)){
    echo "It is empty";
   }
   else{
    echo "Username is not set";
   }
?>