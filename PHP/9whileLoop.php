<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method ="post">
    <label>Enter a number to count down from:</label>
    <input type="text" name = "counter">
    <input type="submit" value="start">
  </form>
</body>
</html>

<?php
//do some code infinitely while some condition remains true
  while($counter <= 10){
    $counter++;
    echo $counter . "<br>";
  }
?>