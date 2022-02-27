<?php

include "google-api-php-client--PHP8.0/vendor/autoload.php";



$gClient = new Google_Client();


$gClient -> setClientId("887473296531-ka8951pkr536housufitah38m0bgvdnm.apps.googleusercontent.com");
$gClient -> setClientSecret("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");
$gClient -> setApplicationName("chromiumproject-342111");
$gClient -> setRedirectUri("http://localhost/Webdev-emobilis/chromium_project/dashboard.php");
$gClient ->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
//above scope standard

// add to index php button
$login_url = $gClient -> createAuthUrl();

session_start();
if (isset($_GET["code"])){

    //fetch th valid authentication token
    $token = $gClient -> fetchAccessTokenWithAuthCode($_GET["code"]);

    if (!isset($token["error"])){

        $gClient -> setAccessToken($token['access_token']);

        //store the session in a token
        $_SESSION['access_token'] = $token ['access_token'];
        //get user data from g.services

        $gServices = new Google_Service_Oauth2($gClient);
        $data = $gServices -> userinfo ->get();


        if (!empty($data["given_name"])){

            $firstname = $data['given_name'];
            $_SESSION ['firstName']= $firstname;

        }
        if (!empty($data['family_name'])){
            $lastname = $data['family_name'];
            $_SESSION ['lastname'] = $lastname;
        }

        if (!empty($data['email'])){
            $email =$data['email'];
            $_SESSION['email']=$email;
        }
        if (!empty($data['gender'])){
            $gender =$data['gender'];
            $_SESSION['gender']=$gender;
        }
        if (!empty($data['picture'])){
            $picture =$data['picture'];
            $_SESSION['picture']=$picture;
        }

        session_start();
        $_SESSION["loggedin"]= true;
        $_SESSION["username"]= "$firstname .$lastname";
    }


}