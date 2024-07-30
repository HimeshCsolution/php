<!DOCTYPE html>
<html>
<body>
<pre>

<?php  
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);
//After the deletion, the array gets reindexed automatically, starting at index 0.
var_dump($cars);
// array(2) {
//     [0]=>
//     string(5) "Volvo"
//     [1]=>
//     string(6) "Toyota"
//   }

//remove multiple item
// Note: The unset() function does not re-arrange the indexes,
//  meaning that after deletion the array will no longer contain the missing indexes.
?>  

<!-- Note: The unset() function does not re-arrange the indexes,
  meaning that after deletion the array will no longer contain the missing indexes. -->
<?php  
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);
var_dump($cars);
// array(2) {
//     [0]=>
//     string(5) "Volvo"
//     [2]=>
//     string(6) "Toyota"
//   }

//remove multiple item
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);
var_dump($cars);
// array(1) {
//     [2]=>
//     string(6) "Toyota"
//   }

// Remove Item From an Associative Array
$cars1 = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars1["model"]);
?>  

</pre>                                                                                                                                              
</body>
</html>                                                                                                 