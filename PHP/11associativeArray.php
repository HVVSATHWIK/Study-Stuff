<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method ="post">
    <label>Enter a country</label>
    <input type="text" name = "country"><br>
    <input type="submit">
  </form>
</body>
</html>

<?php

  //an associative array = An array madeof key => value pairs

  $capitals = array("USA"=>"washington D.C",
                   "Japan"=>"Kyoto", 
                  "South Korea"=>"Seoul","India"=>"New Delhi"
                );
  $capital = $capitals[$_POST["country"]];
  echo "The capital is {$capital}";
  //$capitals["USA"] = "Las Vegas";
  //$capitals["china"] = "Beijing";
  //array_pop($capitals);
  //array_shift($capitals);
  //$keys = array_keys($capitals);
  //$values = array_values($capitals);
  //$capitals = array_flip($capitals);//used to reverese key and value pairs
 $capitals = array_reverse($capitals);
 echo count($capitals) ."<br>";

  foreach($capitals as $key =>$value){
    echo"{$key} = {$value} <br>";
  }
  echo "<br>";

  foreach($keys as $key){//array_keys function example
    echo"{$key} <br>";
  };
  echo "<br>";

  foreach($values as $value){//array_values function example
    echo"{$value} <br>";
  }
  echo "<br>";
?>
