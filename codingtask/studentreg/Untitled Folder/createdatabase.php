<?php


//mysqli object orrient way:

$myserver = "localhost";
$username = "root";
$password = "";

//creat the connection

$connection = new mysqli($myserver, $username, $password);

//check connection

if ($connection->connect_error) {
    die("Did not connect to Db(failed)") . $connection->connection_error();
}

//creat a database

$sqlcreate = "CREATE DATABASE  Explorer2";      // CREATE DATA BASE " UPPER CASE"

if ($connection->query($sqlcreate)===){
    echo "Database created !!! ";
}else{
    echo "Fail to create Db" .$connection->error;
}

$connection->close();
