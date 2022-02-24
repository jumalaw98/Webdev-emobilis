<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="PHPStyle.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> PHP Arrays </title>
</head>
<body>
<?php

//Arrays & For Each Loop
//array starts counting from 0

$HitList=array("Delta","Alfa","Track","Thread","Branch","Objects","Type <br>");
echo "<br>";
$PHP=array(true, False, null,);
echo "<br>";
var_dump($HitList);
echo "<br>";
var_dump($PHP);
echo "<br>";
echo "$HitList[3]";
echo "<br>";
$HitList[6]="Track";
echo "<br>";
echo "$HitList[4]";
echo "<br>";
echo "<br>";

//ForEach loop starts from here

foreach ($HitList as $Types) {
    echo "$Types <br>";

}

//Associative Array
echo "<br>";
$HitList= array("Delta"=>20, "Bytes"=>32, "Branch"=>50);
echo "<br>";
echo "Delta is ".$HitList ['Bytes'] ."years old";









?>

</body>
</html>









