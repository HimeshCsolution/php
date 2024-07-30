<!DOCTYPE html>
<html>
<body>
<pre>

<?php 
// Using the array_diff Function
// You can also use the array_diff() function to remove items from an associative array.

// This function returns a new array, without the specified items. 
$cars = array("brand" , "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", "Ford"]);//create a new array without Mustang and Ford
var_dump($newarray);
// array(2) {
//     [0]=>
//     string(5) "brand"
//     ["year"]=>
//     int(1964)
//   }
?>  


<?php 
// Remove the Last Item
// The array_pop() function removes the last item of an array. 
$cars = array("Volvo", "BMW", "Toyota");
array_pop($cars);
var_dump($cars);
?> 
    
<?php 
//  Remove the First Item
// The array_shift() function removes the first item of an array.
$cars = array("Volvo", "BMW", "Toyota");
array_shift($cars);
var_dump($cars);
// array(2) {
//     [0]=>
//     string(3) "BMW"
//     [1]=>
//     string(6) "Toyota"
//   }
?> 
</pre>
</body>
</html>