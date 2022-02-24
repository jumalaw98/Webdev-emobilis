<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="PHPStyle.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php


$name = $_GET["name"];       //receiving name field value in $name variable
echo "Welcome on board, $name";

echo "<br>";
echo "<br>";

$Institution= $_GET["Institution"];
echo "Thank you for choosing $Institution"; //receiving name field value in $Institution variable

echo "<br>";
echo "<br>";

$List= $_GET ["List"];
echo "You have selected to study $List";



?>






</body>
</html>