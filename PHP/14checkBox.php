<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method = "post">
   <input type="checkbox" name="pizza" value="Pizza">Pizza <br>
   <input type="checkbox" name="Hamburger" 
   value="Hamburger">Hamburger <br>
   <input type="checkbox" name="Hotdog" 
   value="Hotdog">Hotdog <br>
   <input type="checkbox" name="taco" 
   value="Taco">Taco <br>

   <input type="submit" value="Submit" name= "submit">
  </form>
</body>
</html>

<?php
  if(isset($_POST["submit"])){

    if(isset($_POST["pizza"])){
      echo "You like Pizza <br>";
    }
    if(isset($_POST["Hamburger"])){
      echo "You like Hamburger <br>";
    }
    if(isset($_POST["Hotdog"])){
      echo "You like Hotdog <br>";
    }  
    if(isset($_POST["taco"])){
      echo "You like Taco <br>";
    }

    if(empty($_POST["pizza"])){
      echo "You don't like Pizza <br>";
    }
    if(empty($_POST["Hamburger"])){
      echo "You don't like Hamburger <br>";
    }
    if(empty($_POST["Hotdog"])){
      echo "You don't like Hotdog <br>";
    }  
    if(empty($_POST["taco"])){
      echo "You  don't like Taco <br>";
    }
  }
?>