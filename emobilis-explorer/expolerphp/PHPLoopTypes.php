<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="PHPStyle.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Loops | Types</title>
</head>
<body>
<?php
// While Loop
echo"<br>";
echo "****************************************************************************************************** <br>";
echo"PHP Loops | Type1:- The_While_Loop <br>";
echo "----------------------------------------------------------------------------------------";
echo "<br>";
echo "<br>";

$Number=10; // The Loop is staged from this Number

while ($Number<=20){  //Checks the variable and repeats printing any number less than or equal to 20 from the declaired variable above

    echo"The No. of choice is: $Number <br>";

    $Number++;

    // $Number+=2; - increase the number by adding 2 on each printed line

}


//do while loop
echo"<br>";
echo "****************************************************************************************************** <br>";
echo"PHP Loops | Type2:- The_Do_While_Loop <br>";
echo "----------------------------------------------------------------------------------------";
echo "<br>";
echo "<br>";

$Number1=21;
do {

    echo "The Number of choice is : $Number1 <br>";
    $Number1++;
}while ($Number1<=20);


?>
</body>
</html>
