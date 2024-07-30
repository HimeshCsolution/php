<!DOCTYPE html>
<html>
<body>

<?php
$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
?>
<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_search("red",$a);//first find value ka index return kar deta hae 
?>

<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue");
echo array_shift($a)."<br>";//red
print_r ($a);
//Array ( [b] => green [c] => blue )
?>

<?php
$a=array(0=>"red",1=>"green",2=>"blue");
echo array_shift($a)."<br>";//red
print_r ($a);
//Array ( [0] => green [1] => blue )
?>
<!-- slice -->
<?php
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,-2,1));//Array ( [0] => yellow )  here 1 is length not end index

$a=array("a"=>"red","k"=>"grexdfen","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
print_r(array_slice($a,1,2));echo "<br>";
//Array ( [k] => grexdfen [b] => green )


?>
<?php
$a1=array("0"=>"red","1"=>"green");
$a2=array("0"=>"purple","1"=>"orange");
array_splice($a1,1,0,$a2);
print_r($a1);
?>
</body>
</html>
