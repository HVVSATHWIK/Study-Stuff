<?php
  $grade = "A";

  switch($grade){
    case "A":
      echo  "You got the highest grade<br>";
      break;
    case  "B":
      echo"You can be a successful man";
      break;
    case "C":
      echo"You need to work on yourself";
      break;
    default:
    echo "You failed but you should be esuccesfulin life";
  }

  $date = date("l");

  switch($date){
    case "Monday":
      echo "Today is Monday";
      break;
    case "Tuesday":
      echo"Today is Taco Tuesday";
      break;
    case"Wednesday":
      echo"Today is wednesday";
      break;
    default:
        echo "the rest of the days";
  }
?>

