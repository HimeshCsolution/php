<!DOCTYPE html>
<html>
<body>

<?php

function myTest() {
    $y=90;
    function abc(){
        echo $y;
    }
    echo "this is y $y";
    abc();
} 
myTest();
// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";

?>

</body>
</html>