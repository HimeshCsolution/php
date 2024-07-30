<!-- pass by value -->
<!DOCTYPE html>
<html>
<body>

<?php
function add_five($value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;//2
?>

</body>
</html>

<!-- pass by reference -->
<!DOCTYPE html>
<html>
<body>

<?php
function add_five2(&$value) {
  $value += 5;
}


//
$num = 2;
add_five2($num);
echo $num;
?>


function myFamily($lastname, ...$firstname) {
  txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;

</body>
</html>