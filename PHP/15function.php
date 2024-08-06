<?php
  function happy_birthday($first_name, $age){
    echo "Happy Birtday to {$first_name}! <br>";
    echo "Love to watch Cartoon <br>";
    echo "$first_name in my Favourite among cartoons and the character age is {$age} <br>";
    echo "One Piece is my favourite anime <br><br>";
  }

  happy_birthday("Ben 10", 16);
  happy_birthday("Nobita", 10);
  happy_birthday("Shin chan", 5);


  function is_even($number){
    $result = $number % 2;
    return $result;
  }

  echo is_even(10);

  //complicated
  function hypotenuse(string $a, string $b){//we can also use data types
    $c = sqrt(pow($a, 2) + pow($b, 2));
    return $c;
  }

  echo hypotenuse(3, 6);
?>