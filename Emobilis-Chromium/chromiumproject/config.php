<?php

$link = mysqli_connect("localhost", "root", "", "chromiumphp");

    if ($link ==false){
        die("Error connecting to server" .mysqli_connect_error($link));
    }