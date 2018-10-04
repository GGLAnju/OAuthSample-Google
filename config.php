<?php
    session_start();
    require_once "GoogleAPI/vendor/autoload.php";
    $gClient = new Google_Client();
    $gClient->setClientId("1073047390182-iu52r4qnb513vuflofs8htc806uc5o5g.apps.googleusercontent.com");
    $gClient->setClientSecret("lzv1Nz3eWUQHGCENkky79VLe");
    $gClient->setApplicationName("SSS Social Login");
    $gClient->setRedirectUri("http://GGL/Social_OAuth/g-callback.php");
    $gClient->setScopes("https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email");

?>