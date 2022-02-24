<?php

include "header.php";
include "config.php";
    if (isset($_POST["submit"])){

        $fullName = $_POST["fullName"];
        $emailAddress = $_POST["emailAddress"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];


        //file
        $photoname = $_FILES["PHOTO"]["name"];
        $tempname = $_FILES["photo"]["tmp_name"];
        $folder = "upload/".$photoname;

        //cv
        $cv = $_FILES["cv"]["name"];
        $tempcv = $_FILES["cv"]["tmp_name"];
        $foldercv = "upload/".$cvname;

        //insert
        $sql = "INSERT INTO `students`(`fullName`, `emailAddres`, `dob`, `gender`, `photo`, `cv`) 
VALUES ('$fullName','$emailAddress','$dob','$gender','$photoname','$cvname')";

        $result = mysqli_query($link, $sqli);

        //photo
        if (move_uploaded_file($tempname, $folder)){
            echo "<p class=' alert alert-info'>Photo uploaded successfully </p>";
        }else{
            echo "<p>Photo not uploaded </p>";
        }

        //cv
        if (move_uploaded_file($tempname, $folder)){
            echo "<p class=' alert alert-info'>Photo uploaded successfully </p>";
        }else{
            echo "<p>CV not uploaded </p>";
        }


        if  ($result){

        }


    }




