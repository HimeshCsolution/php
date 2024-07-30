<!DOCTYPE html>
<html>
<body>
<!-- flip -->
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$result=array_flip($a1);
print_r($result);
?>
<!-- filter -->
<?php
function test_odd($var)
  {
  return($var & 1);
  }

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));
?>
<!-- map -->
<?php
function myfunction($num)
{
  return($num*$num);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));
?>


<?php
$a1=array("Dog","Cat");
$a2=array("Puppy","Kitten");
print_r(array_map(null,$a1,$a2));//2d array is created
//Array ( [0] => Array ( [0] => Dog [1] => Puppy ) [1] => Array ( [0] => Cat [1] => Kitten ) )
?>

<!-- list -->
<?php
$my_array = array("Dog","Cat","Horse");

list($a, $b) = $my_array;
echo $b
?>
<!-- shuffle -->
<?php
$my_array = array("red","green","blue","yellow","purple");

shuffle($my_array);
print_r($my_array);
?>
</body>
</html>