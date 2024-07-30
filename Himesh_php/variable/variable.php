<!-- PHP supports the following data types:

String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource -->
<!DOCTYPE html>
<html>
<body>

<pre>

<?php
var_dump(5); //int(5)
var_dump("John");// string(4) "John"
var_dump(3.14);// float(3.14)
var_dump(true);// bool(true)
var_dump([2, 3, 56]);/*array(3) {
    [0]=>
    int(2)
    [1]=>
    int(3)
    [2]=>
    int(56)
  }*/
var_dump(NULL);//NULL
var_dump($y);//NULL
?>

</pre>

<?php
//Assigning  a variables
$x = $y = $z = "Fruit";

echo $x;
echo $y;
echo $z;

?>

</body>
</html>