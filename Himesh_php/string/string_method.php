<?php 
echo strlen("Hello");
echo "<br>";
echo str_word_count("dkjf slaf  dfj dsl ld");
echo "<br>";
echo strrev("bye");
echo "<br>";
echo str_replace("hi","bye","hi shivam hi");
echo "<br>";
echo strpos("sdkalfja","a");
echo "<br>";
echo strtolower("HELLO");
echo "<br>";
echo strtoupper("dkjsf");
echo "<br>";
print_r(explode(" ","hi bi hoi ;os"));
echo "<br>";
$x=8;
$y=90;
$z=$x.$y;
echo $z;
echo "<br>";
echo "$x $y";
echo "<br>";
$p="hellojohn";
echo substr($p,2,4);//lloj  
echo "<br>";
echo chunk_split("Hello rohan",2,".");
echo "<br>";
//find the unique charector
echo count_chars("hello",3);
echo "<br>";
$arr=[4,6,"raj",'s'];
echo implode(" ",$arr);
echo "<br>";
echo ucfirst("hello raj hi");
echo "<br>";
echo ucwords("hello raj hi");
echo "<br>";
echo "hi sir \n this is john";
echo "<br>";
echo nl2br("hi sir \n this is john");
echo "<br>";
echo ord("h");
echo "<br>";
// parse_str("name=Peter&age=43");
// echo $name."<br>";
// echo $age;

$string1="aa bb a bb aa";
echo trim($string1,"aa");
echo "<br>";
echo similar_text("HelloWorld","HelloPWoer");
//jitna word similer hoga unka length return ho jayega
echo "<br>";
echo str_ireplace("WORLD","Peter","Hello good world");
echo "<br>";

echo str_pad("hello ji",20,".");
echo "<br>";
echo str_repeat("wow",13);
echo "<br>";
echo str_shuffle("hello world");
echo "<br>";
print_r(str_split("Hello"));
echo "<br>";
print_r(str_split("Hello",3));
echo "<br>";
echo strcasecmp("Hello world!","HELLO WORLD!");
echo "<br>";

?>
