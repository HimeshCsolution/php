<!DOCTYPE html>
<html>
<body>

<?php
$t = 14;

if ($t < 20) {
  echo "Have a good day!";
}
$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
  echo "Both conditions are true";
}

$a = 5;

if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
  echo "$a is a number between 2 and 7";
}
if (5 == 5 && 3 < 7) {
    echo "Hello";
  } else {
    echo "Good bye";
  }
?>
 
</body>
</html>