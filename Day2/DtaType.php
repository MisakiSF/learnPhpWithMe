<?php
//data type
$var1="i love me";
$var2= 23;

echo "<h2>Get type </h2>";
echo gettype($var1). "<br/>";
echo gettype($var2) . "<br/>";

var_dump($var1,$var2);echo "<br/>";

//constante
$firstName="Safae";
echo $firstName."<br/>";//variable


//the cinstqnt must be written ihn the same way as it was declared
define("FIRST_NAME","safae",false);//constante
echo FIRST_NAME;

