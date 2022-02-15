<?php
include ("config.php");


if (isset($_POST["login"])){

    $userEmail = $_POST["userEmail"];
    $userPassword = $_POST["userPassword"];

    // compaire

    $sql = "SELECT * FROM `users` WHERE emailAddress == '$userEmail'";

        $result = mysqli_query($link, $sql);

        if ($result){
            $data = mysqli_num_rows($result);

            if ($data == 1){
                while ( $row)
            }
        }
}




