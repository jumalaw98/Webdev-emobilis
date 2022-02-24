<?php

include "config.php";

if (isset($_POST["register"])){
    $firstName = $_POST["firstName"];
    $secondName = $_POST["secondName"];
    $emailAddress = $_POST["emailAddress"];
    $password = $_POST["password"];
    $confirmPass = $_POST["confirmPass"];

    //Validate
    if  (strlen($password)<6){
        $passError = "Password must have more than 6 charater";
        echo $passError;
    }else{
        $storePass = password_hash($password, PASSWORD_DEFAULT);

    }
    if ($confirmPass!=$password){
        $confirmPass = "Password do not Match!";
        echo $confirmPass;

    }
    if (empty($passError) and  empty($conPassErr)){

//        $sql = "INSERT INTO `users`(`firstName`, `secondName`, `emailAddress`, `password`)
//            VALUES ('$firstName','$secondName','$emailAddress','$storePass')";

        $sql = "INSERT INTO `users`(`firstName`, `secondName`, `emailAddress`, `password`) 
            VALUES ('$firstName','$secondName','$emailAddress','$storePass')";

        $results= mysqli_query($link, $sql);

        if ($results){
            echo "You have been registered ";
            header( "location: index.php");

        }else {
            echo "Eroor execututing query" .mysqli_error($link);
        }

}


    mysqli_close($link);

}