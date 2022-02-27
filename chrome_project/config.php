<?php

$link = mysqli_connect("localhost","root","","chrome_project");

if ($link == false){
    die("Error connecting to server".mysqli_connect_error($link));
}
