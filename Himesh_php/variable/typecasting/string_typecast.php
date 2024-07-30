<?php 
$a=2;
$b=2.4;
$c="hi";
$d=true;
$e=false;
$f=NULL;
$g;

$a=(string)2;
$b=(string)2.4;
$c=(string)"hi";
$d=(string)true;
$e=(string)false;
$f=(string)NULL;
$g=(string)$g;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g)
?>