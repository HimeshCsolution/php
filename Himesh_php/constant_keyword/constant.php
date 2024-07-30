<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);
//A valid constant name start with a letter or underscore
//no doller $ sign before constant name

//using define
//define(name, value, case-insensitive);

// define("GREETING", "Welcome to W3Schools.com!");
// echo GREETING;
// echo GREETINg;//by default it is case sensitive to it give error

define("GREETI", "Welcome to W3Schools.com!",true);//
//Warning: define(): Argument #3 ($case_insensitive) is ignored since 
//declaration of case-insensitive constants is no longer supported 
//Fatal error: Uncaught Error: Undefined constant "GREETi" 
 //echo GREETi;

 //******* IMPORTANT********
 //Agar define method se const ko define kiye hae to globally 
 //to usse function ke ander bhi access kr sakte hae
?>

<!-- method 2 cont keyword-->
 <?php 
 // const are always case sensitive

 const mycar="valvo";
 echo mycar;
            
//  echo myCAR;//error

//const can not be created inside another block scope, like inside a function
// or inside an if statement
 ?>