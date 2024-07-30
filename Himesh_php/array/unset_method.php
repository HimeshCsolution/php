<!DOCTYPE html>
<html>
<body>
<pre>
<!-- Without the unset($x) function, the $x variable will remain as a reference to the last array item. -->
<?php  
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
//unset($x);
 var_dump($cars);
//array(3) {
//     [0]=>
//     string(4) "Ford"
//     [1]=>
//     string(4) "Ford"
//     [2]=>
//     &string(4) "Ford"
//   }

$x=80;
var_dump($cars);
// array(3) {
//     [0]=>
//     string(4) "Ford"
//     [1]=>
//     string(4) "Ford"
//     [2]=>
//     &int(80)
//   }


// Reference in foreach: The foreach loop iterates over the $cars array. 
//The &$x syntax means that $x is a reference to the current element of the array. 
//This allows you to modify the elements of the array directly.

// Using unset($x): After the loop, unset($x); is called. This is crucial because it destroys
// the reference to the last element of the array. Without this line, $x would 
//still reference the last element of the array (which is now "Ford"). 
//If you were to use $x later in the code, it could lead to unintended behavior or bugs.
?>  


<?php  
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
unset($x);
 var_dump($cars);
//array(3) {
//     [0]=>
//     string(4) "Ford"
//     [1]=>
//     string(4) "Ford"
//     [2]=>
//     string(4) "Ford"
//   }

$x=80;
var_dump($cars);
// array(3) {
//     [0]=>
//     string(4) "Ford"
//     [1]=>
//     string(4) "Ford"
//     [2]=>
//     string(4) "Ford"
//   }

?>  
</pre>
</body>
</html>
