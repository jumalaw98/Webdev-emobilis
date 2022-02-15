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

//do while loop
echo"<br>";
echo "****************************************************************************************************** <br>";
echo"PHP Loops | The Do_While_Loop:- Class Example 1  <br>";
echo "----------------------------------------------------------------------------------------";
echo "<br>";
echo "<br>";

$Number1=8;

do {

    echo "The Number of choice is : $Number1 <br>";

    $Number1+=5; // - increase the number by adding 5 on each printed line

}while ($Number1<=20);

?>
</body>
</html>

