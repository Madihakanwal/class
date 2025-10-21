<?php
//task 1
$NAME="USWA";
$year= date("y");
echo "NAME: " .$NAME . "<br>";
echo "YEAR: " .$year . "<br>";
//task 2
echo "Welcome To PHP!<br>";
echo "Have a great learning journey<br>";

//task3
echo "<h2>GIMS Arid agriculture university</h2>";

//Variables and Operators

//task1

$length= 10;
$width=15;
$perimeter= 2*($length+$width);

echo $perimeter;
echo "<br>";
//task 2
$num1=5;
$num2=10;
$num3=4;
$average=($num1+$num2+$num3)/3;
echo $average;
echo "<br>";

//task3
$number1=5;
$number2=10;
$Remainder=($number1%$number2);
echo $Remainder;
echo "<br>";

//conditional Statements
//task1
$numb=6;
if ($numb %2==0) {
    echo "number is even";
}
else {
    echo "number is odd";
}
echo "<br>";

//task2
$numb2=-8;
if ($numb2>0) {
    echo "number is positive";
}
elseif ($numb2<0) {
    echo "number is negative";
}
else {
    echo "number is 0";
}
echo "<br>";

//task3
$age=21;
if ($age >=13 && $age<=19) {
    echo "person is s teenager";
}
else {
    echo "person is not a teenager";
}
echo "<br>";

//task4
$numb3=7;
if ($numb3 %5 ==0 && $numb3 % 11==0) {
   echo "number is divisible by 5 & 11" ;
}
else {
    echo "number is not divisible by 5 & 11";
}
echo "<br>";
//task 5
$number1=4;
$number2=6;

if ($number1>$number2) {
    echo "number one is larger";
}
else {
 echo "numbet two is larger";
}
echo "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>