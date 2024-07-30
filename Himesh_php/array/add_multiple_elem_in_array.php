<!DOCTYPE html>
<html>
<body>

<pre>
<?php  
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];
array_push($cars, "Orange", "Kiwi", "Lemon");//ye next index pe push krta hae
//Output the array:
var_dump($cars);
?>
</pre>

</body>
</html>