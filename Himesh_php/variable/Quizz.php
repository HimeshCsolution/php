<?php 

ini_set('display_errors', 1);
error_reporting(E_ALL);
function x($y){
    $k=9;
    function y($z){
        return ($z*2);
    }
    return ($y+3);
}
$y=4;
$y=x($y)* y($y) ;
//$y=x($y)* y($y)*x($y) ;



// $y=x($y)* y($y)* $k ;// not working giving 0 as output

// The line $y = x($y) * y($y) * $k; will result in an error because $k is not 
// defined in that scope.
//  Since $k is undefined, it defaults to 0, leading to the 
//  entire expression evaluating to 0


 echo y($y)
//  echo $k;
?>