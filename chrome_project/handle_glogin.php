<?php

include "google-api/vendor/autoload.php";


$gClient = new Google_Client();


$gClient->setClientId("887473296531-ka8951pkr536housufitah38m0bgvdnm.apps.googleusercontent.com");
$gClient->setClientSecret("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");
$gClient->setApplicationName("chromiumproject-342111");
$gClient->setRedirectUri("your redirect");
$gClient ->addScope("https://www.googleapis.com/auth/plus.login  https://www.googleapis.com/auth/userinfo.email");


$login_url=$gClient->createAuthUrl();
