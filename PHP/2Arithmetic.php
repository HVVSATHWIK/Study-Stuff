<?php
  //operator preccedence
  // ()
  // **
  // * / %
  // + -
  // << >>
  // < >
  // == != === !==
  // &
  // |
  // ^
  // ~
  // ? :
 // = += -= *= /= %= <<= >>= &= |= ^= ~=

  $x = 10;
  $y = 2;
  $z = null;

  $z = $x + $y;
  $z = $x * $y;
  $z = $x - $y;
  $z = $x / $y;
  $z = $x ** $y;
  $z = $x % $y;
  echo $z;

  $counter = 0;

  $counter = $counter + 1;
  $counter+=5;
  echo $counter;


?>