<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
//The foreach loop - Loops 
//through a block of code for each element in an array or each property in an object.
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}

//Associative arrays
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}

//The foreach loop can also be used to loop through properties of an object:
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
        }
      }
      
      $myCar = new Car("red", "Volvo");
      
      foreach ($myCar as $x => $y) {
        echo "$x: $y <br>";
      }


//Foreach Byref
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);

?>  

</body>
</html>