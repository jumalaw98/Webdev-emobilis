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
                while ( $row = mysqli_fetch_row($result)){
                    $id = $row["id"];
                    $emailAddress = $row["emailAddress"];
                    $password = $row["password"];

                    //verify password
                    if (password_verify($userPassword, $password)){
                        session_start();
                        $_SESSION['loggedin']=true;
                        $_SESSION["id"]= $id;
                        $_SESSION["username"]=$emailAddress;

                        header("location: dashboard.php");

                    }else{
                        echo "Password are not matching";
                    }
                }
            }else{
                echo "No such email address found";
            }
        }
}




