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


https://developers.facebook.com/