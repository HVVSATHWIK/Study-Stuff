<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post">
    <label>radius:</label>
    <input type="text" name = "radius">
    <input type="submit" value = "calculate">
  </form><br>
</body>
</html>

<?php
  $radius = $_POST["radius"];
  $circumference = null;

  $circumference = 2 * pi() * $radius;
  $circumference = round($circumference, 3);

  $area = pi() * pow($radius, 2);
  $area = round($area, 3);

  $volume = 4/3 * pi() * pow($radius, 3);
  $volume = round($radius, 3);

  echo "Volume = {$volume}cm <br>";
  echo "Area = {$area}cm <br>";
  echo "Circumference = {$circumference}cm <br>";
?>