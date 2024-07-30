<!DOCTYPE html>
<html>
<body>

<?php
$a=array("a"=>"red","b"=>"green");
array_unshift($a,"blue");
print_r($a);
?>
<?php
$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
print_r(array_values($a));
?>
<?php
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
?>
<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));
?>
</body>
</html>