
<?php
$number = 123;
var_dump($number);
$number = 'abc';
var_dump($number);

$a = 10;
$b = 3;
//var_dump prints out the type of data 
var_dump($a + $b); // 13
var_dump($a - $b); // 7
var_dump($a * $b); // 30
var_dump($a / $b); // 3.333333...
var_dump($a % $b); // 1
var_dump($a ** $b); // 1000
var_dump(-$a); // -10

//working with trings

$name= 'Jude is a tall boy';
echo strlen($name); //print out the numbber of charcters
$name= trim($name); //cut out the last aord
echo $name;         //print out the thes sentence without 
echo strtoupper($name); //converting to uppercase
echo strtolower($name); //converting to lowercase
echo str_replace('Jude','Andrew', $name); //replace Jude with Andrew

//string concartenation
$firstname= 'Ngwa';
$secondname= 'Jude';
echo "i am called " .$firstname. ' '.$secondname;

//using escapace in PHP

echo "i am a called $firstname $secondname.\nI am a master of time \"\"";