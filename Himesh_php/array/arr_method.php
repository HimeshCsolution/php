<!DOCTYPE html>
<html>
<body>
<pre>

<?php
//Indexed Array
$cars = array("Volvo", "BMW", "Toyota"); 
$cars[1] = "Ford";
var_dump($cars);
?>
<?php
//Associative array
$car = array("zbrand"=>"Ford", "model"=>"Mustang", 34=>1964);
$car["model"] = 2024;
var_dump($car);
?>

<?php  
//function inside php
function myFunction() {
  echo "I come from a function!";
}

$myArr = array("Volvo", 15, 'myFunction');

$myArr[2]();
?>  
</pre>
</body>
</html>
