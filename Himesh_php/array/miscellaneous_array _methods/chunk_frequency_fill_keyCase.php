<!DOCTYPE html>
<html>
<body>

<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));
?>
<?php
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));
?>
<?php
$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));
?>
<?php
$a1=array_fill(3,4,"blue");
print_r($a1);
?>
</body>
</html>