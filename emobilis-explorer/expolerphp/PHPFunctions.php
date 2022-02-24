<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP | Functions </title>
    <link rel="stylesheet" href="PHPStyle.css">
</head>
<body>
<?php

//Functions
echo "PHP | Functions <br>";
echo "<br>";
function Target(){      //syntax for a function

    $Number1=567;           //variable Number1
    $Number2=1000;          //variable Number2

    echo $Number1*$Number2; //multiplication

}
Target();               //calls the function - user defined function
echo "<br>";

echo pi();              //inbuilt function

echo "<br>";

//Creating a function with Arguments

echo "<br>";
echo"Functions with Arguments";
echo "<br>";
function Ruled ($Type1, $Type2){

    echo "$Type1 is better than $Type2";

    echo "<br>";
}
Ruled("Walking", "Running");


echo "<br>";
echo "<br>";
echo "Class Example 1 - Function with 3 arguments calling 3 parameters <br>";
echo "**********************************************************************************";

echo "<br>";

function eMobilis ($Under, $Top, $Page){

    echo "$Under is easy than $Top compared to $Page  <br>";

    echo "<br>";
}
eMobilis ("HTML", "C++", "PHP.",);
emobilis ("PHP", "Bootstrap", "OOP.");
emobilis ("Visual Basic 6.0", "C++", "Python.");

echo "<br>";


?>

</body>
</html>