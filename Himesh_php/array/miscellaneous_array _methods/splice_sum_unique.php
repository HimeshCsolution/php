<!DOCTYPE html>
<html>
<body>

<?php
$a1=array("0"=>"red","1"=>"green");
$a2=array("0"=>"purple","1"=>"orange");
array_splice($a1,1,0,$a2);
print_r($a1);//Array ( [0] => red [1] => purple [2] => orange [3] => green )
?>

<?php                                           
$a=array("a"=>6,"b"=>3,"c"=>"sa");
echo array_sum($a);//9
?>

<!-- Remove duplicate values from an array: -->
<?php                                                                                                                                                                                                           
$a=array("a"=>"red","b"=>"green","c"=>"red");
print_r(array_unique($a));//Array ( [a] => red [b] => green )                                                                                                                                                                                       
?>
</body>
</html>