<?php


$link   = mysqli_connect("localhost", "root", "", "chromium_project");

if ($link == false){
    die("Error connecting to Server") .mysqli_connect_error($link);
}
