<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="PHPStyle.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch Statement</title>
</head>
<body>

<?php
echo"<br>";
echo "****************************************************************************************************** <br>";
echo"PHP Switch | Example 1 <br>";
echo "---------------------------------------------------------------------------";
echo "<br>";
echo "<br>";

$MyCar="Toyota Fielder XT";            //case scenario of choice

switch ($MyCar){
    case "Toyota Land Cruiser LC300":    //case scenario 1
        echo "This is my Car:- $MyCar";
        break;
    case "Mazda Demio":                  //case scenario 2
        echo "I love this Car:- $MyCar";
        break;
    case "Toyota Fielder XT":            //case scenario 3
        echo "This is my Car of choice:- $MyCar";
        break;
    case "Subaru Forester SG5":          //case scenario 4
        echo "This is the best Car:- $MyCar";
        break;
    default:
        echo"Wrong Choice, check the spelling and try again";

}

?>
</body>
</html>
