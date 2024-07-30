<!DOCTYPE html>
<html>
<body>

<?php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));
?>
<?php
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge($a1,$a2));
//Array ( [a] => red [b] => yellow [c] => blue )
?>

<?php
$a=array(3=>"red",4=>"green");
print_r(array_merge($a));//Array ( [0] => red [1] => green )
?>
<?php
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge_recursive($a1,$a2));
//Array ( [a] => red [b] => Array ( [0] => green [1] => yellow ) [c] => blue )
?>

<!-- pad -->
<?php
$a=array("red","green");
print_r(array_pad($a,5,"blue"));
//Array ( [0] => red [1] => green [2] => blue [3] => blue [4] => blue )
?>

<?php
$a=array("red","green");
print_r(array_pad($a,-5,"blue"));
//Array ( [0] => blue [1] => blue [2] => blue [3] => red [4] => green )
?>

<!-- push -->
<?php
$a=array("a"=>"red","b"=>"green");
array_push($a,"blue","yellow");
print_r($a);//Array ( [a] => red [b] => green [0] => blue [1] => yellow )
?>

<!-- reduce -->
<?php
function myfunction($v1,$v2)
{
echo "v1- $v1 , v2- $v2 <br>";
return $v1 + $v2;
}
$a=array(3,8,2);
print_r(array_reduce($a,"myfunction",5));//v1 ki initial value 5 ho jaygi

// v1-5 , v2- 3
// v1- 3 , v2- 8
// v1- 11 , v2- 2
// 13
?>
</body>
</html>
