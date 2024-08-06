<?php
  $foods = array("apple", "orange", "banana", "coconut");

  //$foods[0] = "Pinapple";
  //array_push($foods, "pinapple", "kiwi");
  //array_pop($foods);
  array_shift($foods);//It shifts the first elemrent of an array or say deletes the element in the first index
  //$reversed_foods = array_reverse($foods);
  //echo count($foods);


  foreach($foods as $food){
    echo $food . "<br>";
  }

?>