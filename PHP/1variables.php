<?php
//variable is a container taht holds data

  $name = "Veer Code";
  $food = "burger";
  $email = "fake@gmail.com";

  $age = 21;
  $users = 6;
  $quantity = 9;

  $gpa = 2.5;
  $price = 6;

  $Students = 56;

  echo "Hello {$name}<br>";
  echo"You like {$food}<br>";
  echo"My email is {$email}<br>";

  echo"you are {$age} years old<br>";
  echo"There are {$users} users online<br>";

  echo"Your gpa is: \${$gpa}<br>";
  
  $total = $Students * $price * $quantity;
  echo"The number of {$food} having students to eat of {$quantity} is priced \${$total}"
?>