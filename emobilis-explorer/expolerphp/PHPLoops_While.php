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
echo"PHP Loops | The_While_Loop:- Class Example 1 <br>";
echo "----------------------------------------------------------------------------------------";
echo "<br>";
echo "<br>";

$Number=50; // The Loop is staged from this Number

while ($Number<=100){  //Checks the variable and repeats printing any number less than or equal to 20 from the declaired variable above

    echo"The No. of choice is: $Number <br>";

    $Number+=5; // - increase the number by adding 5 on each printed line

    // $Number+=2; - increase the number by adding 2 on each printed line

}
?>

</body>
</html>
