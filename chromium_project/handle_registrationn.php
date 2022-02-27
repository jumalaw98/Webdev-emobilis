<?php

echo "juma";

die();

include "config.php";

if (isset($_POST["register"])){

    $firstName = $_POST["fistName"];
    $secondName = $_POST["secondName"];
    $emailAddress = $_POST["emailAddress"];
    $password = $_POST["password"];
    $confirmPass   = $_POST["confirmPaa"];

    //validate

    if(strlen($password)<6){
        $passError = "Password must have more than 6 characters";
        echo $passError;
    }else{
        $storePass = password_hash($password,PASSWORD_DEFAULT);
    }

    // PASSWORD AND CONN PASS match
    if ($confirmPass != $password){
        $conPassErr = "Password do not match";
        echo $confirmPass;
    }

    if (empty($passError) and empty($conPassErr)){
        $sql = "INSERT INTO `users`(`id`, `firstName`, `secondName`, `emailAddress`, `password`) 
        VALUES ('$firstName','$secondName','$emailAddress','$storePass')";

        $result = mysqli_query($link, $sql);

        if ($result){
            echo "Your have registered";

            header ("location: index.php");

        }else{
            echo "Error executing query" .mysqli_error($link);
        }

    }

    mysqli_close($link);


}